<?php
class Controller_Buzzword extends Controller_Template 
{

	public function action_index()
	{
		$data['buzzwords'] = Model_Buzzword::find('all');
		$this->template->title = "Buzzwords";
		$this->template->content = View::forge('buzzword/index', $data);

	}

	public function action_view($id = null)
	{
		$data['buzzword'] = Model_Buzzword::find($id);

		is_null($id) and Response::redirect('Buzzword');

		$this->template->title = "Buzzword";
		$this->template->content = View::forge('buzzword/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Buzzword::validate('create');
			
			if ($val->run())
			{
				$buzzword = Model_Buzzword::forge(array(
					'word' => Input::post('word'),
					'child' => Input::post('child'),
					'related_word' => Input::post('related_word'),
					'related_url' => Input::post('related_url'),
					'related_hash' => Input::post('related_hash'),
					'category1' => Input::post('category1'),
					'cname1' => Input::post('cname1'),
					'category2' => Input::post('category2'),
					'cname2' => Input::post('cname2'),
					'category3' => Input::post('category3'),
					'cname3' => Input::post('cname3'),
					'category4' => Input::post('category4'),
					'cname4' => Input::post('cname4'),
					'judge' => Input::post('judge'),
					'comment' => Input::post('comment'),
				));

				if ($buzzword and $buzzword->save())
				{
					Session::set_flash('success', 'Added buzzword #'.$buzzword->id.'.');

					Response::redirect('buzzword');
				}

				else
				{
					Session::set_flash('error', 'Could not save buzzword.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

		$this->template->title = "Buzzwords";
		$this->template->content = View::forge('buzzword/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Buzzword');

		$buzzword = Model_Buzzword::find($id);

		$val = Model_Buzzword::validate('edit');

		if ($val->run())
		{
			$buzzword->word = Input::post('word');
			$buzzword->child = Input::post('child');
			$buzzword->related_word = Input::post('related_word');
			$buzzword->related_url = Input::post('related_url');
			$buzzword->related_hash = Input::post('related_hash');
			$buzzword->category1 = Input::post('category1');
			$buzzword->cname1 = Input::post('cname1');
			$buzzword->category2 = Input::post('category2');
			$buzzword->cname2 = Input::post('cname2');
			$buzzword->category3 = Input::post('category3');
			$buzzword->cname3 = Input::post('cname3');
			$buzzword->category4 = Input::post('category4');
			$buzzword->cname4 = Input::post('cname4');
			$buzzword->judge = Input::post('judge');
			$buzzword->comment = Input::post('comment');

			if ($buzzword->save())
			{
				Session::set_flash('success', 'Updated buzzword #' . $id);

				Response::redirect('buzzword');
			}

			else
			{
				Session::set_flash('error', 'Could not update buzzword #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$buzzword->word = $val->validated('word');
				$buzzword->child = $val->validated('child');
				$buzzword->related_word = $val->validated('related_word');
				$buzzword->related_url = $val->validated('related_url');
				$buzzword->related_hash = $val->validated('related_hash');
				$buzzword->category1 = $val->validated('category1');
				$buzzword->cname1 = $val->validated('cname1');
				$buzzword->category2 = $val->validated('category2');
				$buzzword->cname2 = $val->validated('cname2');
				$buzzword->category3 = $val->validated('category3');
				$buzzword->cname3 = $val->validated('cname3');
				$buzzword->category4 = $val->validated('category4');
				$buzzword->cname4 = $val->validated('cname4');
				$buzzword->judge = $val->validated('judge');
				$buzzword->comment = $val->validated('comment');

				Session::set_flash('error', $val->show_errors());
			}

			$this->template->set_global('buzzword', $buzzword, false);
		}

		$this->template->title = "Buzzwords";
		$this->template->content = View::forge('buzzword/edit');

	}

	public function action_delete($id = null)
	{
		if ($buzzword = Model_Buzzword::find($id))
		{
			$buzzword->delete();

			Session::set_flash('success', 'Deleted buzzword #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete buzzword #'.$id);
		}

		Response::redirect('buzzword');

	}


}