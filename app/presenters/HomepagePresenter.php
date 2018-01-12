<?php

namespace App\Presenters;

use Nette;
use Nette\Database\Context;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
	private $database;

	public function __construct(Context $database)
	{
		$this->database = $database;
	}

	public function renderDefault() {
		$previewArticle  = $this->database->table("articles")->fetch();

		$this->template->article = $previewArticle;
	}
}
