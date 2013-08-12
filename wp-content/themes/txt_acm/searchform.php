<style type="text/css">
	#s {
		height: 30px;
		padding: 6px;
		margin-top: 2px;
		width: 258px;
	}
    .input-append button.add-on { 
        height: inherit !important;
    }
    .icon-search {
        cursor: pointer;
    }
</style>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class='input-append'>
        <input name="s" id="s" placeholder="Search..." />
        <button type="submit" id="searchsubmit" class='btn add-on'>
            <i class="icon-search"></i>
        </button>
    </div>
</form>