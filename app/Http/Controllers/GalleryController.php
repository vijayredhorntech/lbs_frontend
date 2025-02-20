<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{


    public function index($type)
    {

        if ($type === 'NCC') {
            $title = 'NCC Gallery';
            $images = [
                asset('assets/images/ncc/13.jpg'),
                asset('assets/images/ncc/12.jpg'),
                asset('assets/images/ncc/6.jpg'),
                asset('assets/images/ncc/7.jpg'),
                asset('assets/images/ncc/8.jpg'),
                asset('assets/images/ncc/9.jpg'),
                asset('assets/images/ncc/10.jpg'),
                asset('assets/images/ncc/11.jpg'),
                asset('assets/images/ncc/1.jpg'),
                asset('assets/images/ncc/2.jpg'),
                asset('assets/images/ncc/3.jpg'),
                asset('assets/images/ncc/4.jpg'),
                asset('assets/images/ncc/5.jpg'),
            ];
        }
        elseif ($type === 'NSS') {
            $title = 'NSS Gallery';
            $images = [
                asset('assets/images/nss/10.jpg'),
                asset('assets/images/nss/9.jpg'),
                asset('assets/images/nss/8.jpg'),
                asset('assets/images/nss/7.jpg'),
                asset('assets/images/nss/6.jpg'),
                asset('assets/images/nss/1.jpg'),
                asset('assets/images/nss/2.jpg'),
                asset('assets/images/nss/3.jpg'),
                asset('assets/images/nss/4.jpg'),
                asset('assets/images/nss/5.jpg'),
            ];
        }
        elseif ($type === 'R&R') {
            $title = 'R & R Gallery';
            $images = [
                asset('assets/images/rr/1.jpg'),
                asset('assets/images/rr/2.jpg'),
                asset('assets/images/rr/3.jpg'),
                asset('assets/images/rr/4.jpg'),
                asset('assets/images/rr/5.jpg'),
                asset('assets/images/rr/6.jpg'),
            ];
        }
        elseif ($type === 'ACTIVITY') {
            $title = 'College Activities Gallery';
            $images = [
                asset('assets/images/activity/29.jpg'),
                asset('assets/images/activity/28.jpg'),
                asset('assets/images/activity/27.jpg'),
                asset('assets/images/activity/26.jpg'),
                asset('assets/images/activity/25.jpg'),
                asset('assets/images/activity/24.jpg'),
                asset('assets/images/activity/23.jpg'),
                asset('assets/images/activity/22.jpg'),
                asset('assets/images/activity/21.jpg'),
                asset('assets/images/activity/1.jpg'),
                asset('assets/images/activity/2.jpg'),
                asset('assets/images/activity/3.jpg'),
                asset('assets/images/activity/4.jpg'),
                asset('assets/images/activity/5.jpg'),
                asset('assets/images/activity/6.jpg'),
                asset('assets/images/activity/7.jpg'),
                asset('assets/images/activity/8.jpg'),
                asset('assets/images/activity/9.jpg'),
                asset('assets/images/activity/10.jpeg'),
                asset('assets/images/activity/11.jpeg'),
                asset('assets/images/activity/12.jpeg'),
                asset('assets/images/activity/13.jpg'),
                asset('assets/images/activity/14.jpg'),
                asset('assets/images/activity/15.jpg'),
                asset('assets/images/activity/16.jpg'),
                asset('assets/images/activity/17.jpg'),
                asset('assets/images/activity/18.jpg'),
                asset('assets/images/activity/19.jpg'),
                asset('assets/images/activity/20.jpeg'),
            ];
        }
        elseif ($type === 'PHOTOS') {
            $title = 'College Photos Gallery';
            $images = [
                asset('assets/images/gallery/122.jpg'),
                asset('assets/images/gallery/121.jpg'),
                asset('assets/images/gallery/120.jpg'),
                asset('assets/images/gallery/119.jpg'),
                asset('assets/images/gallery/118.jpg'),
                asset('assets/images/gallery/117.jpg'),
                asset('assets/images/gallery/116.jpg'),
                asset('assets/images/gallery/115.jpg'),
                asset('assets/images/gallery/114.jpg'),
                asset('assets/images/gallery/113.jpg'),
                asset('assets/images/gallery/112.jpg'),
                asset('assets/images/gallery/1.jpg'),
                asset('assets/images/gallery/2.jpg'),
                asset('assets/images/gallery/3.jpg'),
                asset('assets/images/gallery/4.jpg'),
                asset('assets/images/gallery/5.jpg'),
                asset('assets/images/gallery/6.jpg'),
                asset('assets/images/gallery/7.jpeg'),
                asset('assets/images/gallery/8.jpeg'),
                asset('assets/images/gallery/9.jpg'),
                asset('assets/images/gallery/10.jpg'),
                asset('assets/images/gallery/11.jpg'),
                asset('assets/images/gallery/12.jpg'),
                asset('assets/images/gallery/13.jpg'),
                asset('assets/images/gallery/14.jpg'),
                asset('assets/images/gallery/15.jpg'),
                asset('assets/images/gallery/16.jpg'),
                asset('assets/images/gallery/17.jpg'),
                asset('assets/images/gallery/18.jpg'),
                asset('assets/images/gallery/19.jpeg'),
                asset('assets/images/gallery/20.jpeg'),
                asset('assets/images/gallery/21.jpg'),
                asset('assets/images/gallery/22.jpg'),
                asset('assets/images/gallery/23.jpg'),
                asset('assets/images/gallery/24.jpg'),
                asset('assets/images/gallery/25.jpg'),
                asset('assets/images/gallery/26.jpeg'),
                asset('assets/images/gallery/27.jpeg'),
                asset('assets/images/gallery/28.jpeg'),
                asset('assets/images/gallery/29.jpg'),
                asset('assets/images/gallery/30.jpg'),
                asset('assets/images/gallery/31.jpeg'),
                asset('assets/images/gallery/32.jpeg'),
                asset('assets/images/gallery/33.jpg'),
                asset('assets/images/gallery/34.jpg'),
                asset('assets/images/gallery/35.jpg'),
                asset('assets/images/gallery/36.jpeg'),
                asset('assets/images/gallery/37.jpeg'),
                asset('assets/images/gallery/38.jpg'),
                asset('assets/images/gallery/39.jpg'),
                asset('assets/images/gallery/40.jpg'),
                asset('assets/images/gallery/41.jpg'),
                asset('assets/images/gallery/42.jpg'),
                asset('assets/images/gallery/43.jpg'),
                asset('assets/images/gallery/44.jpg'),
                asset('assets/images/gallery/45.jpg'),
                asset('assets/images/gallery/46.jpg'),
                asset('assets/images/gallery/47.jpg'),
                asset('assets/images/gallery/48.jpg'),
                asset('assets/images/gallery/49.jpg'),
                asset('assets/images/gallery/50.jpg'),
                asset('assets/images/gallery/51.jpg'),
                asset('assets/images/gallery/52.jpg'),
                asset('assets/images/gallery/53.jpg'),
                asset('assets/images/gallery/54.jpg'),
                asset('assets/images/gallery/55.jpg'),
                asset('assets/images/gallery/56.jpg'),
                asset('assets/images/gallery/57.jpg'),
                asset('assets/images/gallery/58.jpeg'),
                asset('assets/images/gallery/59.jpeg'),
                asset('assets/images/gallery/60.jpg'),
                asset('assets/images/gallery/61.jpeg'),
                asset('assets/images/gallery/62.jpeg'),
                asset('assets/images/gallery/63.jpeg'),
                asset('assets/images/gallery/64.jpeg'),
                asset('assets/images/gallery/65.jpg'),
                asset('assets/images/gallery/66.jpeg'),
                asset('assets/images/gallery/67.jpeg'),
                asset('assets/images/gallery/68.jpeg'),
                asset('assets/images/gallery/69.jpeg'),
                asset('assets/images/gallery/70.jpg'),
                asset('assets/images/gallery/71.jpeg'),
                asset('assets/images/gallery/72.jpeg'),
                asset('assets/images/gallery/73.jpeg'),
                asset('assets/images/gallery/74.jpeg'),
                asset('assets/images/gallery/75.jpeg'),
                asset('assets/images/gallery/76.jpeg'),
                asset('assets/images/gallery/77.jpg'),
                asset('assets/images/gallery/78.jpeg'),
                asset('assets/images/gallery/79.jpg'),
                asset('assets/images/gallery/80.jpeg'),
                asset('assets/images/gallery/81.jpg'),
                asset('assets/images/gallery/82.jpg'),
                asset('assets/images/gallery/83.jpg'),
                asset('assets/images/gallery/84.jpg'),
                asset('assets/images/gallery/85.jpg'),
                asset('assets/images/gallery/86.jpg'),
                asset('assets/images/gallery/87.jpeg'),
                asset('assets/images/gallery/88.jpeg'),
                asset('assets/images/gallery/89.jpeg'),
                asset('assets/images/gallery/90.jpeg'),
                asset('assets/images/gallery/91.jpg'),
                asset('assets/images/gallery/92.jpg'),
                asset('assets/images/gallery/93.jpg'),
                asset('assets/images/gallery/94.jpg'),
                asset('assets/images/gallery/95.jpg'),
                asset('assets/images/gallery/96.jpg'),
                asset('assets/images/gallery/97.jpg'),
                asset('assets/images/gallery/98.jpg'),
                asset('assets/images/gallery/99.jpg'),
                asset('assets/images/gallery/100.jpg'),
                asset('assets/images/gallery/101.jpg'),
                asset('assets/images/gallery/102.jpeg'),
                asset('assets/images/gallery/103.jpg'),
                asset('assets/images/gallery/104.jpeg'),
                asset('assets/images/gallery/105.jpg'),
                asset('assets/images/gallery/106.jpeg'),
                asset('assets/images/gallery/107.jpg'),
                asset('assets/images/gallery/108.jpg'),
                asset('assets/images/gallery/109.jpg'),
                asset('assets/images/gallery/110.jpg'),
                asset('assets/images/gallery/111.jpeg'),

            ];
        }



        return view('gallery')->with([
            'title' => $title,
            'images' => $images,
        ]);
    }

    public function videos(){
        return view('videos');
    }
}
