<form action="/" method="get" class="search-form">

  <input type="text" name="s" class="search-input" id="search" placeholder="Search"
  value="<?php the_search_query();?>"required>

  <button type="submit" class="search-button">
    <span class="material-icons-outlined search-icon">search</span>
  </button>

</form>
