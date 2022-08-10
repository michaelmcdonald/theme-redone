<?php
// source: C:\xampp\htdocs\wrwp-starter/wp-content/themes/wr-wp-starter-theme/views/templates/front-page.latte

use Latte\Runtime as LR;

final class Template2ded1c6aa0 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		/* line 1 */
		$this->createTemplate(tr_get_template_path('/partials/hero'), $this->params, 'include')->renderToContentType('html');
		echo '
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
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="f-row row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--8">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--j row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--c row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<hr>

		<h2>Flex Grid - no-gutter</h2>
		<div class="f-row no-gutter row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row no-gutter row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row no-gutter row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row no-gutter row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="f-row no-gutter row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row no-gutter row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="f-row row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--8">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--j row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="f-row row--c row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<hr>

		<h2>Grid Grid</h2>
		<div class="g-row row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="g-row row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--8">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--j row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--c row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<hr>

		<h2>Grid Grid - no-gutter</h2>
		<div class="g-row no-gutter row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row no-gutter row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row no-gutter row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row no-gutter row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="g-row no-gutter row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row no-gutter row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--2">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--4">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--5">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>
		
		<div class="g-row row--6">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--7">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--8">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--j row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

		<div class="g-row row--c row--3">
			<div class="col">
				<div >Column</div>
			</div>
			<div class="col">
				<div >Column</div>
			</div>
		</div>

	</div><!-- cont -->
</section>


<section>
	<div class="container">
		<h2>Import SVG code from theme assets synchronously example</h2>

		<div class="g-row row--3 col--centered">
			<div class="col">
				<div >
					';
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-1')) /* line 836 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-2')) /* line 845 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('svg-3')) /* line 854 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 873 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 882 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true)) /* line 891 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 910 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 919 */;
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
		echo LR\Filters::escapeHtmlText(($this->global->fn->tr_latte_get_svg)('http://localhost/wrwp-starter/wp-content/uploads/2021/01/svg-3.svg', true, true)) /* line 928 */;
		echo '
					<h5>SVG Icon 3</h5>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ea, blanditiis error culpa commodi.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>';
		return get_defined_vars();
	}

}
