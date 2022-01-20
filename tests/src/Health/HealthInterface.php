<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: health.proto

namespace Health;

use Spiral\GRPC;

interface HealthInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "grpc.health.v1.Health";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param HealthCheckRequest $in
    * @return HealthCheckResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Check(GRPC\ContextInterface $ctx, HealthCheckRequest $in): HealthCheckResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param HealthCheckRequest $in
    * @return HealthCheckResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Watch(GRPC\ContextInterface $ctx, HealthCheckRequest $in): HealthCheckResponse;
}