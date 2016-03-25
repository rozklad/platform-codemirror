<?php namespace Sanatorium\Codemirror\Controllers\Admin;

use Platform\Access\Controllers\AdminController;
use Sanatorium\Codemirror\Repositories\Codemirror\CodemirrorRepositoryInterface;
use Illuminate\Filesystem\Filesystem;

class CodemirrorsController extends AdminController {

	/**
	 * Filesystem
	 * @var \Illuminate\Filesystem\Filesystem
	 */
	protected $filesystem;

	/**
	 * Show codemirror editor for given file.
	 * @param  string $route Path to file
	 * @param  \Illuminate\Filesystem\Filesystem $filesystem
	 * @return \Illuminate\View\View
	 */
	public function get(Filesystem $filesystem, $route = '/')
	{
		return view('sanatorium/codemirror::index');
	}

}
