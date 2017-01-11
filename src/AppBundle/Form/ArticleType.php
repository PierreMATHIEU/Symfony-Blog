<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ArticleType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $option)
	{
		$builder
			->add('title', TextType::class, [
				'attr' => ['placeholder' => 'The title of the article']
			])
			->add('headerImage')
			->add('author')
			->add('content')
		;
	}
}