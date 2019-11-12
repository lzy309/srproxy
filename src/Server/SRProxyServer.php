<?php


namespace Lizhaoyang\SMProxy\Server;


class SRProxyServer extends BaseServer
{
    protected $a;


    public function __construct()
    {
        parent::__construct();
    }

    public function onConnect(\swoole_server $server, int $fd): void
    {
    }

    public function onReceive(\swoole_server $server, int $fd, int $reactorId, string $data): void
    {

    }
}