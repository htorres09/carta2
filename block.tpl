{**
 * plugins/blocks/developedBy/block.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "Developed By" block.
 *}
<div class="pkp_block block_developed_by">
	<div class="content">
        {if(!query->wasEmpty())}
		      <h3>{translate key="plugins.block.carta.displayName"}</h3>
              <br>
              <h4>{translate key="plugins.block.carta.header"}</h4>
              <ul>
                  <li> {$query} </li>
              </ul>
        {/if}
	</div>
</div>
