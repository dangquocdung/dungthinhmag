<?php

namespace Botble\RequestLog\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\RequestLog\Repositories\Interfaces\RequestLogInterface;

class RequestLogController extends BaseController
{

    /**
     * @var RequestLogInterface
     */
    protected $requestLogRepository;

    /**
     * RequestLogController constructor.
     * @param RequestLogInterface $requestLogRepository
     */
    public function __construct(RequestLogInterface $requestLogRepository)
    {
        $this->requestLogRepository = $requestLogRepository;
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getWidgetRequestErrors(AjaxResponse $response)
    {
        $limit = request()->input('paginate', 10);
        $requests = $this->requestLogRepository->getModel()->paginate($limit);
        return $response->setData(view('request-logs::widgets.request-errors', compact('requests', 'limit'))->render());
    }
}