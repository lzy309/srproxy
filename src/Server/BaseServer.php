<?php

declare(strict_types=1);

namespace Lizhaoyang\SMProxy\Server;


abstract class BaseServer
{
    protected $server;

    public function __construct()
    {
        $this->server = new \swoole_server('127.0.0.1', 9501, SWOOLE_PROCESS, SWOOLE_SOCK_TCP);

        $this->server->on('start', [$this, 'onStart']);
        $this->server->on('connect', [$this, 'onConnect']);
        $this->server->on('receive', [$this, 'onReceive']);
        $this->server->on('close', [$this, 'onClose']);

        $result = $this->server->start();

    }

    public function onStart(\swoole_server $server): void
    {

    }

    public function onConnect(\swoole_server $server, int $fd): void
    {

    }

    public function onReceive(\swoole_server $server, int $fd, int $reactorId, string $data): void
    {

    }

    public function onClose(\swoole_server $server, int $fd): void
    {

    }
}