<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Booking;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
class ArticleController extends Controller
{
    public function index()

    {

        $data=Article::latest()->paginate(5);
        $book=Booking::latest()->paginate(5);
        return view('articles.index',[
            'articles'=>$data,
            'bookings'=>$book
        ]);
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function test()
    {
        return view('test');
    }
    public function detail($id,$first_product_no,$first_vaccination_date)
    {
       $data=Article::Find($first_product_no );
       return view('articles.detail',[
           'article'=>$data
       ]);
    }
    public function generate ($id , $name)
    {
        $data = Article::find($id);
        $qrcode = QrCode::size(400)->generate( "/articles/detail/$id");
        return view('qrcode',compact('qrcode'),[
            'article'=>$data
        ]);
    }
    public function add()
    {
    $data = [
    [ "id" => 1, "name" => "Male" ],
    [ "id" => 2, "name" => "Female" ],
    ];
    return view('articles.add', [
    'genders' => $data
    ]);
    }
    public function create()
    {
        $validator = validator(request()->all(),[
            'name'=>'required',
            'date_of_birth'=>'required',
            'Gender'=>'required',
            'Age'=>'required',
            'father_name'=>'required',
            'nationality'=>'required',
            'phone'=>'required',
            'first_product_name'=>'required',
            'first_product_no'=>'required',
            'first_vaccination_appointment'=>'required',
            'first_vaccination_date'=>'required',
            'first_vaccinator'=>'required',
            'first_vaccination_stte'=>'required',
            'first_completed'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $article = new Article;
        $article->name=request()->name;
        $article->date_of_birth=request()->date_of_birth;
        $article->Gender=request()->Gender;
        $article->Age=request()->Age;
        $article->father_name=request()->father_name;
        $article->nationality=request()->nationality;
        $article->nrc=request()->nrc;
        $article->passport=request()->passport;
        $article->phone=request()->phone;
        $article->address=request()->address;
        $article->first_product_name=request()->first_product_name;
        $article->first_product_no=request()->first_product_no;
        $article->first_vaccination_appointment=request()->first_vaccination_appointment;
        $article->first_vaccination_date=request()->first_vaccination_date;
        $article->first_vaccinator=request()->first_vaccinator;
        $article->first_vaccination_stte=request()->first_vaccination_stte;
        $article->first_remark=request()->first_remark;
        $article->first_completed=request()->first_completed;
        $article->second_product_name=request()->second_product_name;
        $article->second_product_no=request()->second_product_no;
        $article->second_vaccination_appointment=request()->second_vaccination_appointment;
        $article->second_vaccination_date=request()->second_vaccination_date;
        $article->second_vaccinator=request()->second_vaccinator;
        $article->second_vaccination_stte=request()->second_vaccination_stte;
        $article->second_remark=request()->second_remark;
        $article->second_completed=request()->second_completed;
        $article->booster_product_name=request()->booster_product_name;
        $article->booster_product_no=request()->booster_product_no;
        $article->booster_vaccination_appointment=request()->booster_vaccination_appointment;
        $article->booster_vaccination_date=request()->booster_vaccination_date;
        $article->booster_vaccinator=request()->booster_vaccinator;
        $article->booster_vaccination_stte=request()->booster_vaccination_stte;
        $article->booster_remark=request()->booster_remark;
        $article->booster_completed=request()->booster_completed;
        $article->second_booster_product_name=request()->second_booster_product_name;
        $article->second_booster_product_no=request()->second_booster_product_no;
        $article->second_booster_vaccination_appointment=request()->second_booster_vaccination_appointment;
        $article->second_booster_vaccination_date=request()->booster_vaccination_date;
        $article->second_booster_vaccinator=request()->second_booster_vaccinator;
        $article->second_booster_vaccination_stte=request()->second_booster_vaccination_stte;
        $article->second_booster_remark=request()->second_booster_remark;
        $article->second_booster_completed=request()->second_booster_completed;
        $article->save();
        $article->id;
        $data = Article::findOrFail($article->id);
        $qrcode = QrCode::size(400)->generate( "/articles/qrcode/$article->id");
        return view('qrcode',compact('qrcode'),[
            'article'=>$data
        ]);
    }
    public function edit($id)
    {
        $data = Article::findOrFail($id);
    return view('articles.edit', [
    'article' => $data
    ]);
    }
    public function update($id)
    {
        $validator = validator(request()->all(),[
            'name'=>'required',
            'date_of_birth'=>'required',
            'Gender'=>'required',
            'Age'=>'required',
            'father_name'=>'required',
            'nationality'=>'required',
            'phone'=>'required',
            'first_product_name'=>'required',
            'first_product_no'=>'required',
            'first_vaccination_appointment'=>'required',
            'first_vaccination_date'=>'required',
            'first_vaccinator'=>'required',
            'first_vaccination_stte'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $article = Article::find($id);
        $article->name=request()->name;
        $article->date_of_birth=request()->date_of_birth;
        $article->Gender=request()->Gender;
        $article->Age=request()->Age;
        $article->father_name=request()->father_name;
        $article->nationality=request()->nationality;
        $article->nrc=request()->nrc;
        $article->passport=request()->passport;
        $article->phone=request()->phone;
        $article->address=request()->address;
        $article->first_product_name=request()->first_product_name;
        $article->first_product_no=request()->first_product_no;
        $article->first_vaccination_appointment=request()->first_vaccination_appointment;
        $article->first_vaccination_date=request()->first_vaccination_date;
        $article->first_vaccinator=request()->first_vaccinator;
        $article->first_vaccination_stte=request()->first_vaccination_stte;
        $article->first_remark=request()->first_remark;
        $article->first_completed=request()->first_completed;
        $article->second_product_name=request()->second_product_name;
        $article->second_product_no=request()->second_product_no;
        $article->second_vaccination_appointment=request()->second_vaccination_appointment;
        $article->second_vaccination_date=request()->second_vaccination_date;
        $article->second_vaccinator=request()->second_vaccinator;
        $article->second_vaccination_stte=request()->second_vaccination_stte;
        $article->second_remark=request()->second_remark;
        $article->second_completed=request()->second_completed;
        $article->booster_product_name=request()->booster_product_name;
        $article->booster_product_no=request()->booster_product_no;
        $article->booster_vaccination_appointment=request()->booster_vaccination_appointment;
        $article->booster_vaccination_date=request()->booster_vaccination_date;
        $article->booster_vaccinator=request()->booster_vaccinator;
        $article->booster_vaccination_stte=request()->booster_vaccination_stte;
        $article->booster_remark=request()->booster_remark;
        $article->booster_completed=request()->booster_completed;
        $article->second_booster_product_name=request()->second_booster_product_name;
        $article->second_booster_product_no=request()->second_booster_product_no;
        $article->second_booster_vaccination_appointment=request()->second_booster_vaccination_appointment;
        $article->second_booster_vaccination_date=request()->second_booster_vaccination_date;
        $article->second_booster_vaccinator=request()->second_booster_vaccinator;
        $article->second_booster_vaccination_stte=request()->second_booster_vaccination_stte;
        $article->second_booster_remark=request()->second_booster_remark;
        $article->second_booster_completed=request()->second_booster_completed;
        $article->update();
        $article->id;
        $data = Article::findOrFail($article->id);
        $qrcode = QrCode::size(400)->generate( "/articles/qrcode/$article->id");
        return view('qrcode',compact('qrcode'),[
            'article'=>$data
        ]);
    }

    public function delete($id)
    {
     $article = Article::find($id);
     $article->delete();
     return redirect('/articles')->with('info', 'Article deleted');
    }

    public function generatePDF($id)
    {
        $data=Article::find($id);
        $qrcode = QrCode::size(100)->generate( "/articles/detail/$id");
        $customPaper = array(0,0,1350.00,750.00);
        $pdf = PDF::loadView('articles.pdf',compact('qrcode'),[
            'article'=>$data
        ])->setPaper($customPaper, 'landscape');

        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function searcharticle(){
        $book=Booking::latest()->paginate(10);
        return view('articles.index',[
            'articles'=>Article::latest()->filter(request(['search'])
            )->paginate(10)->withQueryString(),
            'bookings'=>$book
        ]);
    }
}
