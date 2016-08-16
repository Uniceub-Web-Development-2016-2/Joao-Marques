<?php

class Request 
{


	private $method;
	private $protocol;
	private $server_ip;
	private $remote_ip;
	private $resource;
	private $parameters;



	public function __construct($method, $protocol, $server_ip, $remote_ip, $resource, $parameters)
	{
	$this->method = $method;
	$this->protocol = $protocol;
	$this->server_ip = $server_ip;
	$this->remote_ip = $remote_ip;
	$this->resource = $resource;
	$this->parameters = $parameters;
	}



	public function getMethod()
	{
		return $this->method;
	}
	public function setMethod($method)
	{
		$this->method = $method;
	}
	
	public function getProtocol()
	{
		return $this->protocol;
	}
	public function setProtocol($protocol)
	{
		$this->protocol = $protocol;
	}

	public function getServer_ip()
	{
		return $this->server_ip;
	}	
	public function setServer_ip()
	{
		$this->server_ip = $server_ip;
	}
	
	public function getRemote_ip()
	{
		return $this->remote_ip;
	}
	public function setRemote_ip($remote_ip)
	{
		$this->remote_ip = $remote_ip;
	}

	public function getResource()
	{
		return $this->resource;
	}
	public function setResource($resource)
	{
		$this->resource = $resource;
	}

	public function getParameters()
	{
		return $this->parameters;
	}
	public function setParameters()
	{
		$this->parameters = $parameters;
	}

	public function httpCut(){
	Substring($protocol, 0, -4); 

	}


	public function toStringUrl()
	{					
		$url = getProtocol().'://'.getServer_ip().'/'.getResource().'/';
			foreach(getParameters as $key => $param)
			{
				$url .= $key."=".$param."&";

			}
		Substring($url, 0, -1);
		return $url;
	}








}
