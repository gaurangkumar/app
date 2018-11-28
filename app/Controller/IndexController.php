<?php
/**
 * IronPHP : PHP Development Framework
 * Copyright (c) IronPHP (https://github.com/IronPHP/IronPHP)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @package       IronPHP
 * @copyright     Copyright (c) IronPHP (https://github.com/IronPHP/IronPHP)
 * @link          
 * @since         0.0.1
 * @license       MIT License (https://opensource.org/licenses/mit-license.php)
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Controller;

use Friday\Controller\Controller;
use Friday\Foundation\Application;

class IndexController extends Controller
{
    /**
     * Create new Controller instance.
     *
     * @return void
     */
    function __construct()
    {
    }

    /**
     * Index method.
     *
     * @return void
     */
    public function index()
    {
        $this->template('index', ['name'=>'IronPHP', 'version'=>Application::VERSION]);
        #Examples
        //$data = $this->model('IndexModel')->get('name');
        //$data = $this->model('IndexModel')->get(null, ['id' => 1]);
        //$data = $this->model('IndexModel')->get(null, ['id' => 1, 'status' => 0]);
        //$data = $this->model('IndexModel')->get(null, 'WHERE id = 2 AND status = 1');
        //$data = $this->model('IndexModel')->add();
        //$data = $this->model('IndexModel')->update();
        //$data = $this->model('IndexModel')->delete();
        //$this->view('index');
        //$this->view('index', $data);
    }

    /**
     * Parameter method.
     *
     * @return void
     */
    public function name($param)
    {
        return "Name($param) Method Called";
    }

    /**
     * Show users from model.
     *
     * @return void
     */
    public function showUsers()
    {
        print_r($this->model->getUsers());
    }
} 
