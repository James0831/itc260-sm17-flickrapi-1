<?php
//application/models/News_model.php
class Pics_model extends CI_Model {

		public function __construct()
		{
				$this->load->database();
		}

		public function get_pics($tags)
		{
			//move api_key into custom_config.php
			$api_key = '763345e7127bd695f2281fe50eb17540';

			$perPage = 25;
			$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
			$url.= '&api_key=' . $api_key;
			$url.= '&tags=' . $tags;
			$url.= '&per_page=' . $perPage;
			$url.= '&format=json';
			$url.= '&nojsoncallback=1';

			$response = json_decode(file_get_contents($url));
			$pics = $response->photos->photo;
			
			return $pics;
			
		}// end of get_news
}