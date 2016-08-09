<?php

class Request 
{


	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;



	public function __construct($method, $protocol, $ip, $resource, $parameters)
	{
	$this->method = $method;
	$this->protocol = $protocol;
	$this->ip = $ip;
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

	public function getIp()
	{
		return $this->ip;
	}	
	public function setIp()
	{
		$this->ip = $ip;
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


	public function toStringUrl()
	{					
		$url = getProtocol().'://'.getIp().'/'.getResource().'/';
			foreach(getParameters as $key => $param)
			{
				$url .= $key."=".$param."&";

			}
		Substring($url, 0, -1);
		return $url;
	}








}
