<?php
// source: C:\xampp\htdocs\wrwp-starter/wp-content/themes/wr-wp-starter-theme/views/templates/front-page.latte

use Latte\Runtime as LR;

final class Templated79a42edd0 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo "\n";
		/* line 2 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/layout/header'), $this->params, 'include')->renderToContentType('html');
		echo "\n";
		/* line 4 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/partials/hero'), ['headline' => 'Headline Latte Dynamic',
			'background_dark' => true] + $this->params, 'include')->renderToContentType('html');
		echo '

<simple-greeting name="World"></simple-greeting>
';
		$test_arr = ["href" => "https://google.com", "target" => true, "title" => "Yooo"];
		echo '<lit-button obj=\'';
		echo LR\Filters::escapeHtmlAttr(json_encode($test_arr)) /* line 13 */;
		echo '\'></lit-button>


<section class="content">
	<div class="container">
		';
		echo LR\Filters::escapeHtmlText(the_content()) /* line 18 */;
		echo '
	</div>
</section>


<section>
  <div class="container">
		<h2>Flex Grid</h2>
		<div class="f-row row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--4">
';
		for ($i = 0;
		$i < 4;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--5">
';
		for ($i = 0;
		$i < 5;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>
		
		<div class="f-row row--6">
';
		for ($i = 0;
		$i < 6;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--7">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--8">
';
		for ($i = 0;
		$i < 16;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--j row--3">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--c row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<hr>

		<h2>Flex Grid - no-gutter</h2>
		<div class="f-row no-gutter row--2">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row no-gutter row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row no-gutter row--4">
';
		for ($i = 0;
		$i < 4;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row no-gutter row--5">
';
		for ($i = 0;
		$i < 5;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>
		
		<div class="f-row no-gutter row--6">
';
		for ($i = 0;
		$i < 6;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row no-gutter row--7">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>


		<div class="f-row row--j row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="f-row row--c row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<hr>

		<h2>Grid Grid</h2>
		<div class="g-row row--2">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--4">
';
		for ($i = 0;
		$i < 4;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--5">
';
		for ($i = 0;
		$i < 5;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>
		
		<div class="g-row row--6">
';
		for ($i = 0;
		$i < 6;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--7">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--8">
';
		for ($i = 0;
		$i < 8;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--j row--3">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--c row--3">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<hr>

		<h2>Grid Grid - no-gutter</h2>
		<div class="g-row no-gutter row--2">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row no-gutter row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row no-gutter row--4">
';
		for ($i = 0;
		$i < 4;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row no-gutter row--5">
';
		for ($i = 0;
		$i < 5;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>
		
		<div class="g-row no-gutter row--6">
';
		for ($i = 0;
		$i < 6;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row no-gutter row--7">
';
		for ($i = 0;
		$i < 7;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--2">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--3">
';
		for ($i = 0;
		$i < 3;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>


		<div class="g-row row--j row--3">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

		<div class="g-row row--c row--3">
';
		for ($i = 0;
		$i < 2;
		$i++) {
			echo '			<div class="col">
				<div >Column</div>
			</div>
';
		}
		echo '		</div>

	</div><!-- cont -->
</section>


<section>
	<div class="container">
		<h2>Import SVG code from theme assets synchronously example</h2>

		<div class="g-row row--3 col--centered">
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-1')) /* line 337 */;
		echo '
					<h5>SVG Icon 1</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-2')) /* line 346 */;
		echo '
					<h5>SVG Icon 2</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-3')) /* line 355 */;
		echo '
					<h5>SVG Icon 3</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<h2>Import SVG code from uploads (media) synchronously example</h2>

		<div class="g-row row--3 col--centered">
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 374 */;
		echo '
					<h5>SVG Icon 1</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 383 */;
		echo '
					<h5>SVG Icon 2</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 392 */;
		echo '
					<h5>SVG Icon 3</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<h2>Import SVG code from uploads (media) asynchronously example</h2>

		<div class="g-row row--3 col--centered">
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 411 */;
		echo '
					<h5>SVG Icon 1</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 420 */;
		echo '
					<h5>SVG Icon 2</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 429 */;
		echo '
					<h5>SVG Icon 3</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<h2>Buttons example</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<a href="#" class="btn btn--brand">btn brand</a>
		<a href="#" class="btn btn--brand-outline">btn brand</a>
		<a href="#" class="btn btn--sec">btn sec</a>
		<a href="#" class="btn btn--sec-outline">btn sec</a>
		<a href="#" class="btn btn--ghost">btn ghost</a>
		<a href="#" class="btn btn--ghost--brand">btn ghost brand</a>
		<a href="#" class="btn btn--ghost--sec">btn ghost sec</a>
	</div>
</section>




<section>
	<div class="container">
		<h2>Read image from theme assets synchronously</h2>
		';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_img_sync)(
		($this->global->fn->tr_latte_get_img_path)('logo.png'),
		"Logo " . get_bloginfo()
		)) /* line 467 */;
		echo '
	</div>
</section>


<section>
	<div class="container">
		<h2>Read image from theme assets asynchronously</h2>
		';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_img_async)(
		($this->global->fn->tr_latte_get_img_path)('people/photo-1517299151253-d0449b733f57.jpg'),
		get_bloginfo(),
		"additional-optional-class1 additional-optional-class2"
		)) /* line 478 */;
		echo '
	</div>
</section>


<section>
	<div class="container">
		<h2>Read background image from theme assets asynchronously</h2>
		<div
			style="height: 333px; width: 500px; background-repeat: no-repeat; background-position: center; background-size: cover;"
			class="js-img-lazy jsLoading"
			data-img-src="';
		echo LR\Filters::escapeHtmlAttr(($this->global->fn->tr_latte_get_img_path)('people/photo-1517299151253-d0449b733f57.jpg')) /* line 493 */;
		echo '"
		>
		</div>						
	</div>
</section>


';
		/* line 500 */
		$this->createTemplate(($this->global->fn->tr_view_path)('/layout/footer'), $this->params, 'include')->renderToContentType('html');
		return get_defined_vars();
	}

}