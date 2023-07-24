<template>
  <!-- Filters section START -->
  <section>
        <div class="filters">
          <div class="filters__left">
            <div class="">
              <button class=" btn btn--outline"><i class="sidebar__icon las la-chart-bar"></i></button>
              <button class=" btn btn--outline"><i class="sidebar__icon las la-align-justify"></i></button>
            </div>
            <button class="btn btn--deal btn--primary">
              <span>
                <i class="nav__icon--s las la-plus"></i>
              </span>
              <span>Deal</span>
            </button>
          </div>
          <div class="filters__right">
            <div class="">
              <i class="las la-dollar-sign nav__icon--s"></i>
              <span>507,705</span>
            </div>
            <div class="">
              <i class="las la-balance-scale-left nav__icon--s"></i>
              <span>507,705</span>
            </div>
            <div class="">
              <span>23 deals</span>
            </div>
            
            <slot></slot>
          </div>
        </div>
      </section>
      <!-- Filters section END -->
</template>
<style></style>
<script setup>
// Props


/////////////////////////////////////////////////
// Menu
const menuCollection = document.querySelectorAll('.menu');

menuCollection.forEach(m => {
  let menuIsOpened = false;
  const menuTrigger = m.querySelector(".menu__trigger");
  const menuList = m.querySelector(".menu__list");

  // Functions
  const closeMenu = () => {
    menuList.classList.add("menu__list--hidden");
    menuIsOpened = false;
  };

  const openMenu = () => {
    menuList.classList.remove("menu__list--hidden");
    menuIsOpened = true;
  };

  const toggleMenu = () =>
    menuIsOpened ? closeMenu() : openMenu();
  
  // Event Listeners
  // Open or close menu clicking on menuTrigger
  menuTrigger.addEventListener("click", toggleMenu);

  // Close dropdown clicking outside dropdown
  document.addEventListener("click", (e) => {
    const clickOutsideDropdown = !e.target.closest(".menu");
    if (clickOutsideDropdown && menuIsOpened) closeMenu();
  });

  // Close dropdown by pressing the ESC key
  window.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && menuIsOpened) closeMenu();
  });
});
</script>