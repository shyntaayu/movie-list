<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(){
        $urlpopular = "https://api.themoviedb.org/3/movie/popular?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlnowplaying = "https://api.themoviedb.org/3/movie/now_playing?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urltoprated="https://api.themoviedb.org/3/movie/top_rated?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlupcoming ="https://api.themoviedb.org/3/movie/upcoming?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urllatest="https://api.themoviedb.org/3/movie/latest?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US";


        $popular = access_api($urlpopular,'GET',[]);
        $listnowplaying = access_api($urlnowplaying,'GET',[]);
        $listtoprated = access_api($urltoprated,'GET',[]);
        $listupcoming = access_api($urlupcoming,'GET',[]);
        $listlatest = access_api($urllatest,'GET',[]);
		if (is_array($popular->results)) {
            $data['popular'] = $popular->results[0];
            $data['listpopular'] = $popular->results;
            $data['listnowplaying'] = $listnowplaying->results;
            $data['listtoprated'] = $listtoprated->results;
            $data['listupcoming'] = $listupcoming->results;
            $data['listlatest'] = $listlatest;
		}else{
            $data['popular'] = [];
            $data['listpopular']=[];
            $data['listnowplaying'] = [];
            $data['listtoprated'] = [];
            $data['listupcoming'] = [];
            $data['listlatest'] = [];
        }

        // var_dump($data['listupcoming']);
		return view('welcome', $data);
    }

    public function detailMovie($movieid) {
        $urldetail="https://api.themoviedb.org/3/movie/".$movieid."?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US";
        $urlrecom = "https://api.themoviedb.org/3/movie/".$movieid."/recommendations?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlreview = "https://api.themoviedb.org/3/movie/".$movieid."/reviews?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlcredit = "https://api.themoviedb.org/3/movie/".$movieid."/credits?api_key=fe969c9839d99ddbd49bce311034c232";

        $detailmovie = access_api($urldetail,'GET',[]);
        $recom = access_api($urlrecom,'GET',[]);
        $review = access_api($urlreview,'GET',[]);
        $credit = access_api($urlcredit,'GET',[]);
        $data['detail'] = $detailmovie;
        $data['recom'] = $recom->results;
        $data['review'] = $review->results;
        $data['credit'] = $credit->cast;
        // var_dump($data['review']);
        return view('detail', $data);
            // \Session::flash('message', "file not found");
            // \Session::flash('alert-class', 'alert-danger');
            // return \Redirect::back();
    }

    

    public function getAllTopRated(){
        $urlpopular = "https://api.themoviedb.org/3/movie/popular?page=1&language=en-US&api_key=fe969c9839d99ddbd49bce311034c232";

		$listtoprated = access_api($url,'GET',[]);
		if (is_array($listtoprated->results)) {
			$data['listtoprated'] = $listtoprated->results;
		}else{
			$data['listtoprated'] = [];
        }
        
        // var_dump($listtoprated);
        // echo '<pre>';
        // var_dump($data['listtoprated']);
        // var_dump(is_array($listtoprated->results));
        // echo '</pre>';

		return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
