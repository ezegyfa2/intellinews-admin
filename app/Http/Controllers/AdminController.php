<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Crm\Controllers\BlueAdminController;

class AdminController extends BlueAdminController
{
    public $indexTemplateName = 'intellinews_admin_index';
    public $editTemplateName = 'intellinews_admin_edit';
    public $templateFolderPath = __DIR__ . '/../Templates';
    public $filterFormItemPrefix = 'intellinews-admin-filter';
}
