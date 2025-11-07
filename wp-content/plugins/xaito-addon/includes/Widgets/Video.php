<?php

namespace Xoomcoders\Xaito\Widgets;


class Video extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'xaito-video';
	}

	public function get_title()
	{
		return __('Video', 'xaito-addon');
	}

	public function get_icon()
	{
		return 'eicon-cogs';
	}

	public function get_categories()
	{
		return ['xaito-category'];
	}

	protected function register_controls()
	{
		$this->start_controls_section(
			'layout_section',
			[
				'label' => __('Layout', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'layout_type',
			[
				'label' => __('Select Layout', 'xaito-addon'),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'layout_one',
				'options' => [
					'layout_one' => __('Layout One', 'xaito-addon'),
				]
			]
		);


		$this->end_controls_section();

		include  xaito_get_elementor_option('video-one-option.php');

		//General style
		$this->start_controls_section(
			'general_style',
			[
				'label' => esc_html__('Style Options', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout']
				]
			]
		);

		xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .cta-project__title', ['layout_one']);
		xaito_elementor_general_style_options($this, 'Subtitle', '{{WRAPPER}} .cta-project__tagline', ['layout_one']);
		xaito_elementor_general_style_options($this, 'Content', '{{WRAPPER}} .cta-project__bottom-text', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include xaito_get_template('video-one.php');
	}
}
