<?php

namespace Xoomcoders\Xaito\Widgets;


class SidebarDownload extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'xaito-sidebardownload';
	}

	public function get_title()
	{
		return __('SidebarDownload', 'xaito-addon');
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

		include  xaito_get_elementor_option('sidebar-download-option-one.php');

		//typos
		$this->start_controls_section(
			'style_options',
			[
				'label' => esc_html__('Style Options', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .services-single-page__sidebar-single .title h2', ['layout_one']);


		// list
		xaito_elementor_general_style_options($this, 'List Item', '{{WRAPPER}} .service-details__brochures-list li a', ['layout_one']);

		$this->add_control(
			'icon-color',
			[
				'label' => __('Icon Color', 'xaito-addon'),
				'type' =>  \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-details__brochures-list li a span' => 'color: {{VALUE}};',
				],
				'condition' => [
					'layout_type' => 'layout_one',
				]
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include xaito_get_template('sidebar-download-one.php');
	}
}
