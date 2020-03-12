<?php

class Places_model extends CI_Model
{
	private $name;
	private $placeId;
	private $adress;
	private $type;
	private $tel;
	private $website;

	public function __construct()
	{
	}

	public function callApi($method, $url, $data = false)
	{
		$curl = curl_init();

		switch ($method) {
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);

				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}

		// Optional Authentication:
		//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		//curl_setopt($curl, CURLOPT_USERPWD, "username:password");

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($curl);

		curl_close($curl);

		return $result;
	}

	public function getPlacesList($api_key, $query)
	{
		$data = array(
			'key' => $api_key,
			'query' => $query
		);

		return $this->callApi('GET', 'https://maps.googleapis.com/maps/api/place/textsearch/json', $data);
	}
}
