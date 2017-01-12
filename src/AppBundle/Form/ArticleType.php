<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ArticleType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $option)
	{
		$builder
			->add('title', TextType::class, [
				'attr' => ['placeholder' => 'The title of the article']
			])
			->add('headerImage', FileType::class, ['label' => 'Upload the header file'] )
			->add('author')
			->add('content')
		;
	}
}