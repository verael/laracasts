<?php

class Response
{
    protected $status;
    protected $headers;
    protected $body;

    public function __construct($status, $headers, $body)
    {
        $this->status = $status;
        $this->headers = $headers;
        $this->body = $body;
        $this->setHeader('Content-Type', 'text/plain');
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function setHeaderArr($header)
    {
        $this->headers[] += $header;
    }

    public function setContentType($type)
    {
        $this->headers['Content-Type'] = $type;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function sendJSON($json)
    {
        $this->setContentType( 'application/json');
        $this->setbody(json_encode($json));
        $this->send();
    }

    public function sendHTML($html)
    {
        $this->setContentType( 'text/html');
        $this->setbody($html);
        $this->send();
    }

    public function send()
    {
        http_response_code($this->status);
        $this->setHeader('Content-Length', strlen($this->body));
        $this->initHeaders();
        echo $this->body;
    }

    private function initHeaders()
    {

        foreach ($this->headers as $key => $value) {
            header("$key: $value");
        }

        header("Content-Length: ".strlen($this->body));
    }
}