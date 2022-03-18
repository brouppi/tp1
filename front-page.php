<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc"><a href="https://fr-ca.facebook.com/"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#d27474"><path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"></path></svg></a></div>
    <div class="animation__bloc"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><svg width="32px" height="32px" viewBox="0 0 55 80" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><g transform="matrix(1 0 0 -1 0 80)"><rect width="10" height="20" rx="3"><animate attributeName="height" begin="0s" dur="4.3s" values="20;45;57;80;64;32;66;45;64;23;66;13;64;56;34;34;2;23;76;79;20" calcMode="linear" repeatCount="indefinite"></animate></rect><rect x="15" width="10" height="80" rx="3"><animate attributeName="height" begin="0s" dur="2s" values="80;55;33;5;75;23;73;33;12;14;60;80" calcMode="linear" repeatCount="indefinite"></animate></rect><rect x="30" width="10" height="50" rx="3"><animate attributeName="height" begin="0s" dur="1.4s" values="50;34;78;23;56;23;34;76;80;54;21;50" calcMode="linear" repeatCount="indefinite"></animate></rect><rect x="45" width="10" height="30" rx="3"><animate attributeName="height" begin="0s" dur="2s" values="30;45;13;80;56;72;45;76;34;23;67;30" calcMode="linear" repeatCount="indefinite"></animate></rect></g></svg></a></div>
    <div class="animation__bloc"><a href="https://www.24heures.ca/2022/02/26/voici-ce-que-vous-pouvez-faire-pour-aider-lukraine"><svg width="64px" height="64px" viewBox="0 0 21 15" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="UA_svg__a_1146"><stop stop-color="#FFF" offset="0%"></stop><stop stop-color="#F0F0F0" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="UA_svg__b_1147"><stop stop-color="#156DD1" offset="0%"></stop><stop stop-color="#0D5EB9" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="UA_svg__c_1148"><stop stop-color="#FFD948" offset="0%"></stop><stop stop-color="#FFD430" offset="100%"></stop></linearGradient></defs><g fill="none" fill-rule="evenodd"><path fill="url(#UA_svg__a_1146)" d="M0 0h21v15H0z"></path><path fill="url(#UA_svg__b_1147)" d="M0 0h21v8H0z"></path><path fill="url(#UA_svg__c_1148)" d="M0 8h21v7H0z"></path></g></svg></a></div>
    <div class="animation__bloc"><a href="#"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M3.47 7.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L9 4.81v7.44a.75.75 0 01-1.5 0V4.81L4.53 7.78a.75.75 0 01-1.06 0z"></path></svg></a></div>
    <div class="animation__bloc"><a href="https://www.youtube.com/watch?v=1_Z5q152GSQ"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg></a></div>
</section>

    
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>