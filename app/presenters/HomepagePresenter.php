<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
use Nette\Application\AppForm,
	Nette\Forms\Form;

class HomepagePresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->posts = PostsModel::fetchAll();
	}

	public function renderSingle($id)
	{
		$this->template->post = PostsModel::fetchSingle($id);
		$this->template->comments = CommentsModel::fetchAll($id);
	}

	public function commentFormSubmitted(AppForm $form)
	{
		$data = $form->getValues();
		$data['date'] = new DateTime();
		CommentsModel::insert($data);
		$this->redirect('this');
	}

	public function createComponentCommentForm($name)
	{
		$form = new AppForm($this, $name);
		$form->addText('author', 'Jméno')
				->addRule(Form::FILLED, 'To se neumíš ani podepsat?!');
		$form->addTextArea('body', 'Komentář')
				->addRule(Form::FILLED, 'Komentář je povinný!');
		$form->addSubmit('send', 'Odeslat');
		$form->addHidden('post_id', $this->request->params['id']);
		$form->onSubmit[] = callback($this, 'commentFormSubmitted');
		return $form;
	}
}
