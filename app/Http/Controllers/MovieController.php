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
        $a = explode('-', $movieid); // Restricts it to only 2 values, for names like Billy Bob Jones

        $movieid = $a[0];
        $urldetail="https://api.themoviedb.org/3/movie/".$movieid."?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US";
        $urlrecom = "https://api.themoviedb.org/3/movie/".$movieid."/recommendations?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlreview = "https://api.themoviedb.org/3/movie/".$movieid."/reviews?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urlcredit = "https://api.themoviedb.org/3/movie/".$movieid."/credits?api_key=fe969c9839d99ddbd49bce311034c232";
        $urlsimilar = "https://api.themoviedb.org/3/movie/".$movieid."/similar?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $urltitle = "https://api.themoviedb.org/3/movie/".$movieid."/alternative_titles?api_key=fe969c9839d99ddbd49bce311034c232";

        $detailmovie = access_api($urldetail,'GET',[]);
        $recom = access_api($urlrecom,'GET',[]);
        $review = access_api($urlreview,'GET',[]);
        $credit = access_api($urlcredit,'GET',[]);
        $similar = access_api($urlsimilar,'GET',[]);
        $alttitle = access_api($urltitle,'GET',[]);
        $time = $detailmovie->runtime;
        $format = '%02d:%02d';
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        $duration =  sprintf($format, $hours, $minutes);

        $data['detail'] = $detailmovie;
        $data['recom'] = $recom->results;
        $data['review'] = $review->results;
        $data['credit'] = $credit->cast;
        $data['duration'] = $duration;
        $data['similar'] = $similar->results;
        $data['title'] = $alttitle->titles;
        // var_dump($alttitle);
        return view('detail', $data);
            // \Session::flash('message', "file not found");
            // \Session::flash('alert-class', 'alert-danger');
            // return \Redirect::back();
    }

    public function loadMore($tipe){
        if($tipe=='popular'){
        $urlpopular = "https://api.themoviedb.org/3/movie/popular?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $popular = access_api($urlpopular,'GET',[]);
        $data['list'] = $popular->results;
        $data['title'] = "Popular";
        }else if($tipe=='nowplaying'){
        $urlnowplaying = "https://api.themoviedb.org/3/movie/now_playing?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $listnowplaying = access_api($urlnowplaying,'GET',[]);
        $data['list'] = $listnowplaying->results;
        $data['title'] = "Now Playing";
        } else if($tipe=='toprated'){
        $urltoprated="https://api.themoviedb.org/3/movie/top_rated?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $listtoprated = access_api($urltoprated,'GET',[]);
        $data['list'] = $listtoprated->results;
        $data['title'] = "Top Rated";
        } else if($tipe=='upcoming'){
        $urlupcoming ="https://api.themoviedb.org/3/movie/upcoming?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $listupcoming = access_api($urlupcoming,'GET',[]);
        $data['list'] = $listupcoming->results;
        $data['title'] = "Up Coming";
        } else if($tipe=='latest'){
        $urllatest="https://api.themoviedb.org/3/movie/latest?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US";
        $listlatest = access_api($urllatest,'GET',[]);
        $data['list'] = $listlatest;
        $data['title'] = "Latest";
        }


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
            $data['listpopular'] = $popular->results;
            $data['listnowplaying'] = $listnowplaying->results;
            $data['listtoprated'] = $listtoprated->results;
            $data['listupcoming'] = $listupcoming->results;
            $data['listlatest'] = $listlatest;
		}else{
            $data['listpopular']=[];
            $data['listnowplaying'] = [];
            $data['listtoprated'] = [];
            $data['listupcoming'] = [];
            $data['listlatest'] = [];
        }

        $a = [
            [
            "cat" => "Popular",
            "link" =>"popular",
            "total" => $popular->total_results,
            ],
            [
                "cat" => "Now Playing",
                "link" =>"nowplaying",
                "total" => count($listnowplaying->results),
            ],
                [
                    "cat" => "Top Rated",
                    "link" =>"toprated",
                    "total" => $listtoprated->total_results,
                ],
                    [
                        "cat" => "Up Coming",
                        "link" =>"upcoming",
                        "total" => count($listtoprated->results),
                    ],
                        [
                            "cat" => "Latest",
                            "link" =>"latest",
                            "total" => count($listlatest),
                        ],
                    ];
$b = json_encode($a);
$c = json_decode($b);
          $data['category'] = $c;
        
        // var_dump($c);
        // echo '<pre>';
        // var_dump($data['listtoprated']);
        // var_dump(($listtoprated->results));
        // echo '</pre>';

		return view('loadmore', $data);
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
