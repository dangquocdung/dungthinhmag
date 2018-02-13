<?php

namespace Botble\AuditLog\Http\Controllers;

use Botble\AuditLog\Repositories\Interfaces\AuditLogInterface;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;

class AuditLogController extends BaseController
{

    /**
     * @var AuditLogInterface
     */
    protected $auditLogRepository;

    /**
     * AuditLogController constructor.
     * @param AuditLogInterface $auditLogRepository
     */
    public function __construct(AuditLogInterface $auditLogRepository)
    {
        $this->auditLogRepository = $auditLogRepository;
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getWidgetActivities(AjaxResponse $response)
    {
        $limit = request()->input('paginate', 10);
        $histories = $this->auditLogRepository->getModel()->orderBy('created_at', 'desc')->paginate($limit);
        return $response->setData(view('audit-logs::widgets.activities', compact('histories', 'limit'))->render());
    }
}