<?php

namespace Xoomcoders\Xaito\Widgets;


class SidebarProjectInfo extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'xaito-SidebarProjectInfo';
	}

	public function get_title()
	{
		return __('Sidebar Project Info', 'xaito-addon');
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

		include  xaito_get_elementor_option('sidebar-project-one-option.php');

		//typos
		$this->start_controls_section(
			'style_options',
			[
				'label' => esc_html__('Style Options', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout']
				]
			]
		);

		xaito_elementor_general_style_options($this, 'Widget Title', '{{WRAPPER}} .case-single-page__sidebar-single .title h2', ['layout_one']);


		xaito_elementor_general_style_options($this, 'Text', '{{WRAPPER}} .case-single-page__project-info-list li .text-box span', ['layout_one']);

		xaito_elementor_general_style_options($this, 'Link', '{{WRAPPER}} .case-single-page__project-info-list li .text-box h3 a', ['layout_one']);

		xaito_elementor_general_style_options($this, 'Icon', '{{WRAPPER}} .case-single-page__project-info-list li .icon-box span::before', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include xaito_get_template('sidebar-project-one.php');
	}
}
