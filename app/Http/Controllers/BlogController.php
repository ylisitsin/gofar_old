<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */


    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $posts = DB::table('blog')->orderBy('id','desc')->paginate(5);
        if(isset($_GET['search'])){
            $posts= DB::table('blog')->where('text','like','%'.$_GET['search'].'%')->orderBy('id','desc')->paginate(5);
            return view('page.blog.index',['posts'=>$posts]);
        }else{
            return view('page.blog.index',['posts'=>$posts]);
        }

    }

    public function single($id){
        $post = DB::table('blog')->where('id','=',$id)->first();
        if(empty($post)){
            abort(404);
        }
        $related_posts = DB::table('blog')->where('category','=',$post->category)->orderBy('id','desc')->limit(3)->get();
        $last_posts = DB::table('blog')->orderBy('id','desc')->limit(3)->get();
        return view('page.blog.single',['post'=>$post,'related_posts'=>$related_posts,'last_posts'=>$last_posts]);
    }

    public function category($category){
        $posts = DB::table('blog')->where('category','=',$category)->orderBy('id','desc')->paginate(5);
        $last_posts = DB::table('blog')->orderBy('id','desc')->limit(3)->get();
        return view('page.blog.index',['posts'=>$posts,'last_posts'=>$last_posts]);
    }
    public function tag($tag){
        $posts = DB::table('blog')->where('tag','like','%'.$tag.'%')->orderBy('id','desc')->paginate(5);
        $last_posts = DB::table('blog')->orderBy('id','desc')->limit(3)->get();
        return view('page.blog.index',['posts'=>$posts,'last_posts'=>$last_posts]);
    }

    public function post_add(){
        return view('panel.admin.blog.blog_add');
    }

    public function post_add_in_db(Request $request){
        $title = $request->title;
        $category = $request->category;
        $tag = $request->tag;
        $text = $request->post_content;
        $pre_text = $request->pre_post_content;

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();


        $arr = array('a','b','c','d','e','f',
            'g','h','i','j','k','l',
            'm','n','o','p','r','s',
            't','u','v','x','y','z',
            'A','B','C','D','E','F',
            'G','H','I','J','K','L',
            'M','N','O','P','R','S',
            'T','U','V','X','Y','Z',
            '1','2','3','4','5','6',
            '7','8','9','0');
        // Генерируем пароль
        $pass = "";
        for($i = 0; $i < 20; $i++)
        {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $pass .= $arr[$index];
        }
        $filename = $pass.'.'.$extension;
        $mime = $file->getClientMimeType();
        Storage::disk('local')->put($filename,  File::get($file));



        DB::table('blog')->insert(['title'=>$title, 'category'=>$category, 'tag'=>$tag,'pre_text'=>$pre_text , 'text'=>$text,'mime'=>$mime,'filename'=>$filename]);
        DB::table('files')->insert(['mime'=>$mime,'filename'=>$filename]);
        if(Cache::has('blog')){
            Cache::forget('blog');
        }

        Cache::rememberForever('blog', function()
        {
            return DB::table('blog')->get();
        });
        return redirect('/dashboard/blog');
    }

    public function post_edit($id){
        $result = DB::table('blog')->select('*')->where('id','=',$id)->first();

        return view('panel.admin.blog.blog_edit',['result'=>$result]);
    }

    public function post_update(Request $request,$id){
        $title = $request->title;
        $category = $request->category;
        $tag = $request->tag;
        $text = $request->post_content;
        $pre_text = $request->pre_post_content;

        $arr = array('a','b','c','d','e','f',
            'g','h','i','j','k','l',
            'm','n','o','p','r','s',
            't','u','v','x','y','z',
            'A','B','C','D','E','F',
            'G','H','I','J','K','L',
            'M','N','O','P','R','S',
            'T','U','V','X','Y','Z',
            '1','2','3','4','5','6',
            '7','8','9','0');
        // Генерируем пароль
        $pass = "";
        for($i = 0; $i < 20; $i++)
        {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $pass .= $arr[$index];
        }

        $file = $request->file('file');
        if($file != null){
            $extension = $file->getClientOriginalExtension();
            $filename = $pass.'.'.$extension;
            $mime = $file->getClientMimeType();
            Storage::disk('local')->put($filename,  File::get($file));
            DB::table('blog')->where('id',$id)->update(['title'=>$title, 'category'=>$category, 'tag'=>$tag, 'pre_text'=>$pre_text , 'text'=>$text,'mime'=>$mime,'filename'=>$filename]);
            DB::table('files')->insert(['mime'=>$mime,'filename'=>$filename]);
        }else{
            DB::table('blog')->where('id',$id)->update(['title'=>$title, 'category'=>$category, 'tag'=>$tag,'pre_text'=>$pre_text , 'text'=>$text]);
        }

        return redirect('/dashboard/blog');
    }

    public function post_delete($id){
        DB::table('blog')->where('id',$id)->delete();
        return redirect('/dashboard/blog');
    }

    public function all_post(){

        $posts = DB::table('blog')->orderBy('id','desc')->paginate(5);
        return view('panel.admin.blog.index',['posts' => $posts]);

    }

}
