<?php

namespace AvtoDev\RoadRunnerLaravel\Worker\CallbacksInitializer;

use AvtoDev\RoadRunnerLaravel\Worker\Callbacks\CallbacksInterface;
use AvtoDev\RoadRunnerLaravel\Worker\StartOptions\StartOptionsInterface;

interface CallbacksInitializerInterface
{
    /**
     * This header using for telling application "force use https schema!".
     */
    const FORCE_HTTPS_HEADER_NAME = 'HTTPS';

    /**
     * Header for forcing https schema by incoming (**external**) request header.
     */
    const FORCE_HTTPS_EXTERNAL_HEADER_NAME = 'FORCE-HTTPS';

    /**
     * App binding key for storing timestamp before request processing.
     */
    const ABSTRACT_REQUEST_PROCESSING_START_TIME = 'REQUEST_PROCESSING_START_TIME';

    /**
     * App binding key for storing allocated memory size before request processing.
     */
    const ABSTRACT_REQUEST_PROCESSING_ALLOCATED_MEMORY = 'REQUEST_PROCESSING_ALLOCATED_MEMORY';

    /**
     * Constructor.
     *
     * @param StartOptionsInterface $start_options
     * @param CallbacksInterface    $callbacks
     */
    public function __construct(StartOptionsInterface $start_options, CallbacksInterface $callbacks);

    /**
     * Make initialization.
     *
     * IMPORTANT! You should call this method manually after instance constructor calling.
     *
     * @return void
     */
    public function makeInit();
}
