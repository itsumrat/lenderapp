@extends('layouts.dashboard')
@section('custom_css')
@endsection

@section('body')
    
    
    <!-- LEFT LIST -->
    <div class="column list-column d-print-none column-medium">
       <div class="fill list-header topgrad d-print-none">
          <div class="list-filter">
          
             <div class="btn-toolbar float-right">
                 
                <button id="ember1740" class="tooltip-container ember-view btn btn-primary" type="button">
                   <span>
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xsmall align-text-bottom mb-2">
                         <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                      </svg>
                   </span>
                    
                </button>
                
                
                <div id="ember1741" class="dropdown ember-view btn-group list-sorter">
                    
                   <button id="ember1742" class="dropdown-toggle no-caret ember-view btn btn-secondary">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm">
                         <path d="M0 191h512v64H0zM0 319h512v64H0zM0 447h512v64H0z"></path>
                      </svg>
                   </button>
                   <div id="ember1743" class="dropdown-menu dropdown-menu-right ember-view">
                      <div class="fltheader">Sort by</div>
                      <button class="dropdown-item sortable asc active" type="button" data-ember-action="" data-ember-action-1745="1745">Name<span class="sort"></span></button>
                      <button class="dropdown-item sortable asc " type="button" data-ember-action="" data-ember-action-1747="1747">
                         Company Name
                      </button>
                      <button class="dropdown-item sortable asc " type="button" data-ember-action="" data-ember-action-1749="1749">
                         Receivables
                      </button>
                      <button class="dropdown-item sortable asc " type="button" data-ember-action="" data-ember-action-1751="1751">
                         Created Time
                      </button>
                      <button class="dropdown-item sortable asc " type="button" data-ember-action="" data-ember-action-1753="1753">
                         Last Modified Time
                      </button>
                       
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1754="1754">
                         <i>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-text-top">
                               <path d="M447.6 270.8c-8.8 0-15.9 7.1-15.9 15.9v142.7H80.4V286.8c0-8.8-7.1-15.9-15.9-15.9s-15.9 7.1-15.9 15.9v158.6c0 8.8 7.1 15.9 15.9 15.9h383.1c8.8 0 15.9-7.1 15.9-15.9V286.8c0-8.8-7.1-16-15.9-16z"></path>
                               <path d="M244.7 328.4c.4.4.8.7 1.2 1.1.2.1.4.3.5.4.2.2.5.4.7.5.2.1.4.3.7.4.2.1.4.3.7.4.2.1.5.2.7.3.2.1.5.2.7.3.2.1.5.2.7.3.3.1.5.2.8.3.2.1.5.1.7.2.3.1.5.1.8.2.3.1.6.1.8.1.2 0 .5.1.7.1.5.1 1 .1 1.6.1s1 0 1.6-.1c.2 0 .5-.1.7-.1.3 0 .6-.1.8-.1.3-.1.5-.1.8-.2.2-.1.5-.1.7-.2.3-.1.5-.2.8-.3.2-.1.5-.2.7-.3.2-.1.5-.2.7-.3.2-.1.5-.2.7-.3.2-.1.5-.3.7-.4.2-.1.4-.3.7-.4.3-.2.5-.4.7-.5.2-.1.4-.3.5-.4.4-.3.8-.7 1.2-1.1l95-95c6.2-6.2 6.2-16.3 0-22.5-6.2-6.2-16.3-6.2-22.5 0L272 278.7v-212c0-8.8-7.1-15.9-15.9-15.9s-15.9 7.1-15.9 15.9v212l-67.8-67.8c-6.2-6.2-16.3-6.2-22.5 0-6.2 6.2-6.2 16.3 0 22.5l94.8 95z"></path>
                            </svg>
                         </i>
                         Import Customers 
                      </button>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1755="1755">
                         <i>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-text-top">
                               <path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path>
                               <path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path>
                            </svg>
                         </i>
                         Export Customers 
                      </button>
                      
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1756="1756">
                         <i>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom">
                               <path d="M258.3 149.8c-57.3 0-103.9 46.6-103.9 103.9 0 57.3 46.6 103.9 103.9 103.9s104-46.6 104-103.9c0-57.3-46.6-103.9-104-103.9zm0 175.9c-39.7 0-71.9-32.3-71.9-71.9 0-39.7 32.3-71.9 71.9-71.9 39.7 0 71.9 32.3 71.9 71.9.1 39.6-32.2 71.9-71.9 71.9z"></path>
                               <path d="M491.4 202.9l-38.7-14c-3-9.5-6.6-18.6-10.7-27.1l18.3-38.3c5.6-11.8 3.2-26-6-35.2l-30.5-30.6c-9.3-9.3-23.4-11.7-35.2-6.1l-38.2 18.1c-8.1-3.8-16.7-7.1-27.1-10.3l-14-38.7C304.9 8.5 293.2.4 280.2.4h-43.6c-12.9 0-24.6 8.2-29.1 20.4l-14.1 38.8c-9.7 3.1-18.8 6.7-27.1 10.7l-38.2-18.4c-11.8-5.6-26-3.2-35.2 6L62.1 88.3c-9.3 9.3-11.7 23.5-6 35.3l18 37.8c-5.2 9.8-9.2 18.7-12.2 27l-40.8 14.2C8.6 207 .2 218.7.2 232v43.3c0 13.2 8.4 25 20.7 29.2l40.9 14.3c3.1 8.8 6.9 17.7 11.7 27.1L55.6 384c-5.6 11.9-3.2 26 6.2 35.2L92.6 450c9.2 9.2 23.4 11.7 35.2 6l38.1-18.1c9.7 5.2 18.6 9.2 27.1 12.2l14.2 40.8c4.3 12.5 16 20.8 29.3 20.8h43.3c13.2 0 25-8.4 29.3-20.8l14.2-40.9c8.9-3.1 18-7 27.1-11.7l38.1 17.9c11.8 5.6 26 3.1 35.3-6.2l30.7-30.9c9.2-9.2 11.6-23.3 6-35.2l-18.2-38.4c3.8-8 7.1-16.6 10.3-27.1l38.6-14c12.3-4.3 20.6-16 20.6-29V232c0-13-8.2-24.7-20.4-29.1zm-11.6 71.8l-38.5 14c-9.2 3.3-16.1 10.6-19 19.9v.1c-2.8 9.3-5.7 16.8-8.9 23.5-4.1 8.5-4.2 18.3-.1 26.7l18.2 38.3-29.7 29.9-38-17.9c-8.9-4.1-18.8-4-27.3.5-8 4.1-16 7.6-23.7 10.3-8.9 2.9-16.1 10.1-19.3 19.1l-14.2 40.7h-41.8L223.2 439c-3.1-8.9-10-15.9-19-19-7.3-2.6-15-6.1-23.7-10.7s-19.1-4.8-27.9-.6l-37.9 18-29.9-29.8 17.9-37.9c4.1-8.9 4-18.9-.5-27.3-4.3-8.3-7.7-16.1-10.3-23.9-3.1-8.9-10.2-16-19.1-19.1l-40.6-14.2v-41.8l40.7-14.2c8.9-3.1 15.9-10 19-18.9 2.5-7 6-14.7 10.7-23.5 4.6-8.6 4.9-19 .6-27.9l-18-37.8L115 80.9l38 18.3c8.5 4.1 18.6 4 27.1-.2 7.1-3.5 15.1-6.6 23.6-9.3 9-2.9 16.3-9.9 19.6-19l14-38.5h42.1l13.9 38.4c3.3 9.2 10.6 16.1 19.9 19h.1c9.2 2.8 16.6 5.6 23.4 8.9 8.6 4.1 18.3 4.1 26.8.1l38-18 29.5 29.6-18.2 38-.1.2c-4 8.7-4 18.5.2 26.9 3.6 7.4 6.7 15.3 9.3 23.5 2.7 9 9.8 16.4 18.9 19.8l38.5 14v42.1z"></path>
                            </svg>
                         </i>
                         Customer Preferences  
                      </button>
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1757="1757">
                         <i>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-text-top">
                               <path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path>
                               <path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path>
                            </svg>
                         </i>
                         Export Current View 
                      </button>
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1758="1758">
                         <i>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom">
                               <path d="M417.1 509.3h-.4c-3.5-.3-6.5-1.8-8.7-4.3-2.2-2.6-3.3-5.8-3.1-9.3v-.2l6.3-49.2C366.1 485.4 308.4 507 248.5 507c-9.7 0-19.7-.6-29.4-1.8-65.8-7.9-124.6-40.9-165.5-93.1C14.1 361.7-3.9 297.6 3 231.7c.1-1.3.3-2.6.4-3.9.3-3 1.4-5.6 3-8 3.4-5 8.9-7.9 14.9-7.9.7 0 1.5 0 2.2.1 4.8.5 9.1 3 12.1 6.8 3 3.7 4.2 8.4 3.8 13v.3c-.1 1.1-.2 2.2-.4 3.3-5.9 56.5 9.4 111.4 43.1 154.3 35 44.5 85.2 72.8 141.5 79.5 8.4 1 16.8 1.5 25.2 1.5 51.4 0 100.9-18.6 139.5-52.3 1.6-1.4 3.1-2.7 4.7-4.1l-60.6-1.5h-.2c-4.5-.3-8.8-2.3-11.4-5.3-1.8-2.1-2.7-4.8-2.4-7.4v-.2l.2-5.4v-.4c.3-2.1 1.1-4.1 2.3-5.9 2.6-3.8 7.1-6.2 11.6-6.2h.5l96.1 2.6h.4l6.3.3c3.6.2 6.8 1.7 9.1 4.4 2.3 2.6 3.4 6 3.1 9.6l-.6 6.3-.1.4-11.6 93.7c-.2 2.2-1 4.2-2.1 5.8-2.2 3.3-6 5.2-10.6 5.2h-1l-4.9-1zm75.2-210.7c-.7 0-1.5 0-2.1-.1-9.7-1.2-16.8-10-15.8-19.8v-.3c.1-1 .2-2 .3-3.1 5.8-55.1-9.9-109.4-44.2-153.1-35-44.5-85.2-72.8-141.4-79.5-8.9-1.1-17.8-1.6-26.5-1.6-20.6 0-41 3-60.7 8.8-28.4 8.5-54.1 22.6-76.5 42.1-5 4.3-9.7 8.9-14.3 13.6l61.4 1.5h.2c4.2.3 8.4 2.3 10.9 5.3 2.5 2.9 2.9 5.8 2.6 7.8v.3l.1 5-.1.6c-.3 2-1.1 4-2.2 5.7-2.6 3.8-7.1 6.2-11.6 6.2h-.6l-96.1-2.6h-.3l-6.5-.3c-3.6-.2-6.8-1.7-9.1-4.4-2.3-2.6-3.4-6-3.1-9.6l.6-6.3.1-.4L69 20.7c.2-2.2 1.1-4.3 2.3-6.1 2.5-3.7 6.7-6 11.1-6.2h1.1l5 1.2h.4c2.9.2 5.3 1.6 7.3 3.8 2.4 2.9 3.8 7.2 3.5 11.2v.3l-6 47.3c2.6-2.5 5.3-5 7.9-7.3C127.9 42 158 25.4 191.2 15.4 214.3 8.5 238.3 5 262.5 5c10.2 0 20.6.6 30.9 1.9C359.2 14.7 418 47.8 458.9 100c40.1 51.1 58.5 114.6 51.7 179.1-.1 1.3-.3 2.4-.4 3.7-.3 2.9-1.4 5.6-3 8-3.4 4.8-9 7.8-14.9 7.8z"></path>
                            </svg>
                         </i>
                         Refresh List 
                      </button>
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item pagetips-dropdown" type="button" data-ember-action="" data-ember-action-1759="1759">
                         <i>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-md align-text-top">
                               <path d="M179 436.8l153-20.9v-24l-153 20.9zM376.9 51.4C344.6 18.3 301.7 0 256.1 0c-45.6 0-88.5 18.3-120.9 51.4-32.1 32.9-49.8 76.2-49.8 122 0 24.7 5.1 47.8 15.1 68.6 6.8 15 15.7 28.8 26.5 41.3 4.6 5.8 9.2 11.4 13.7 16.9 21.6 26.1 40.3 48.7 40.3 81v19.6l153.4-21.2 2.7-27.2c7.1-18.9 20.8-35.7 35.2-53.4 3.4-4.1 6.8-8.4 10.2-12.7 14.1-15.5 25.1-33.4 32.8-53.3 7.4-17.9 11.1-37.9 11.1-59.4.2-46-17.5-89.3-49.5-122.2zM269 352.9l-24 3.6V254.3L217.8 209h78.7L269 254.3v98.6zm118.6-131.4l-.1.3c-6.4 16.6-15.6 31.5-27.4 44.4l-.7.9c-3.4 4.3-6.9 8.6-10.3 12.8-13.7 16.9-27.9 46.2-37 66.5l-19.1 2.9v-88.5l44.9-74.8H176.5l44.5 74.8v99.4l-11.6 1.8c-5.8-32.9-26-57.3-45.6-81-4.5-5.4-9.1-11-13.5-16.6l-.5-.6c-9-10.3-16.5-21.9-22.1-34.4l-.1-.3c-8.1-16.7-12.2-35.5-12.2-55.7 0-37.9 14.6-73.8 41.2-101.1 26.7-27.3 62-42.4 99.4-42.4 37.4 0 72.7 15 99.3 42.3 26.5 27.2 41.2 63.1 41.2 101.1 0 17.7-3 33.9-8.9 48.2zM249.2 512c40.4 0 74.3-9.3 81.2-47.8l-143.9 18.6c15 17.9 37.5 29.2 62.7 29.2zM179 472.8l153-20.9v-24l-153 20.9z"></path>
                            </svg>
                         </i>
                         Page Tips 
                      </button>
                   </div>
                </div>
             </div>
             <div id="ember1761" class="dropdown ember-view clearfix list-title">
                <a id="ember1762" class="dropdown-toggle no-caret ember-view  ">
                   <span class="filter-title over-flow ">All Customers</span>&nbsp;
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle">
                      <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                   </svg>
                   
                </a>
                <div id="ember1763" class="dropdown-menu ember-view scrollmenu">
                   
                   <div class="fltheader">Default Filters</div>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1766="1766">
                      All Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1767="1767">
                      Active Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1768="1768">
                      CRM Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1769="1769">
                      Duplicate Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1770="1770">
                      Inactive Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1771="1771">
                      Client Portal Enabled
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1772="1772">
                      Client Portal Disabled
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1773="1773">
                      Overdue Customers
                   </button>
                   <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1774="1774">
                      Unpaid Customers
                   </button>
                   
                   <div class="dropdown-divider"></div>
                   <a href="#/customviews/new?entity_type=customer" id="ember1778" class="add-new dropdown-item text-dodgerblue ember-view">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
                         <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                      </svg>
                      New Custom View
                   </a>
                </div>
             </div>
          </div>
       </div>
       <div class="scroll-y fill body scrollbox list-body">
          <div id="ember1779" class="ember-view">
             
          </div>
          <div class="table-responsive overflow-initial customviews-table  ">
             <table id="ember1780" class="table zi-table table-hover ember-view header-fixed">
                 
                <tbody>
                   <tr tabindex="-1" id="ember1783" class="ember-view table-active  ">
                      <td id="ember1784" class="cursor-pointer bulk-selection-cell ember-view"><input id="ember1785" class="ember-checkbox ember-view cursor-pointer" type="checkbox"></td>
                      <td>
                         <div class="list-primary">
                            <div class="name">
                               <a href="#/contacts/2409693000000079003?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1786" class="active ember-view">
                                  Zylker (Sample Client) 
                               </a>
                                
                            </div>
                            <div class="text-muted">
                                $0.00  
                            </div>
                         </div>
                      </td>
                   </tr>
                   
                </tbody>
             </table>
          </div>
          <div showpagelengthoption="" showtotalcount="" id="ember1787" class="ember-view">
             <div class="pagination clearfix d-print-none">
                 
             </div>
          </div>
           
       </div>
    </div>
    <!-- LEFT LIST END -->
    
    
    <!-- RIGHT SIDE -->
    <div class="column content-column">
       <div class="header no-border d-flex">
          <h3 class="over-flow header-title">
             <div class="btn-group visible-1279-inline-block">
                <button class="btn btn-secondary btn-back" data-ember-action="" data-ember-action-1789="1789">
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom">
                      <path d="M370 508c19.3 0 28.9-23.4 15.2-37.1L167.9 255.5 385.2 40.1C398.9 26.4 389.3 3 370 3c-5.7 0-11.1 2.2-15.2 5.3L122 239.1c-8.5 9.5-8.5 23.3 0 31.8l232.8 230.9c4.1 4 9.5 6.2 15.2 6.2z" id="Layer_2_2_"></path>
                   </svg>
                </button>
             </div>
              Zylker (Sample Client) 
          </h3>
          <div>
             <div class="btn-toolbar">
                 
                <div class="btn-group"><button class="btn btn-secondary" data-ember-action="" data-ember-action-1790="1790">Edit</button></div>
                <div class="btn-popover-contain">
                   <button id="ember1791" class="tooltip-container ember-view btn btn-secondary" type="button">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom">
                         <path d="M262.4 512c-35.7 0-64.2-10.5-84.9-31.4-24.7-24.9-37.1-63.8-36.8-115.6.2-32.6-.3-248.7-1.4-268.1-.9-15.9 4.8-41.6 23.6-61.5 11.4-12 32-26.3 66-26.3 30.3 0 55.1 15.7 69.8 44.2 10.1 19.7 12.2 38.8 12.4 40.9l.1.9v.9l.5 236.9v.5c-1 19.2-15.9 47.6-53 47.6h-.7c-39.1-.4-53.7-30.4-56-46.2l-.2-1.3V179.6c0-10.2 8.3-18.5 18.5-18.5s18.5 8.3 18.5 18.5v150.5c.4 1.5 1.4 4.4 3.6 7.2s6.2 6.5 16 6.6c9.2.1 12.4-3.2 14.1-6 1.6-2.6 2.2-5.6 2.3-6.3l-.7-234.5c-.4-3-2.4-15.6-8.8-27.6-8.3-15.7-20.2-23.3-36.4-23.3-16.7 0-29.8 5-39.1 14.8-10.7 11.3-14 26.6-13.6 34 1.2 21.6 1.6 244.3 1.4 270.3-.2 41.6 8.5 71.7 26 89.3 13.5 13.6 33.2 20.4 58.7 20.4 17.2 0 31.8-5.9 43.5-17.7 18.9-18.9 30.1-53.4 30-92.2 0-19.6-.1-193.2-.1-250.9 0-10.2 8.3-18.5 18.5-18.5s18.5 8.3 18.5 18.5c0 57.6.1 231.2.1 250.8.1 49.1-14.8 92.3-40.8 118.4-18.6 18.7-42.7 28.6-69.6 28.6z"></path>
                      </svg>
                   </button>
                   <div id="ember1793" class="popover-container ember-view">
                      <div id="ember1794" class="d-none popover bs-popover-bottom ember-view attachments-invoice pop-over-div">
                         
                      </div>
                   </div>
                   <div></div>
                </div>
                <div id="ember1795" class="dropdown ember-view btn-group">
                   <button id="ember1796" class="dropdown-toggle ember-view btn-primary btn"> New Transaction </button> 
                   <div id="ember1797" class="dropdown-menu dropdown-menu-right ember-view">
                      <div class="fltheader">Sales</div>
                      <a href="#/invoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1800" class="ember-view dropdown-item"> Invoice </a><a href="#/contacts/2409693000000079003/customerpayment" id="ember1802" class="ember-view dropdown-item"> Customer Payment </a><a href="#/quotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1804" class="ember-view dropdown-item"> Estimate </a><a href="#/recurringinvoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1806" class="ember-view dropdown-item"> Recurring Invoice </a><a href="#/expenses/new?customer_id=2409693000000079003&amp;customer_name=Zylker%20(Sample%20Client)" id="ember1808" class="ember-view dropdown-item"> Expense </a><a href="#/accountant/journals/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1810" class="ember-view dropdown-item"> Journals </a><a href="#/creditnotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1812" class="ember-view dropdown-item"> Credit Note </a> 
                   </div>
                </div>
                 
                <div id="ember1813" class="dropdown ember-view btn-group">
                   <button id="ember1814" class="dropdown-toggle ember-view btn btn-secondary"> More </button> 
                   <div id="ember1815" class="dropdown-menu dropdown-menu-right ember-view multi-level">
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1816="1816">Associate Templates</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1817="1817">Stop all Reminders</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1818="1818">Email Customer</button> 
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1819="1819">Configure Client Portal</button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1820="1820">Clone</button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1821="1821">Link to Vendor</button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1822="1822">  Merge Customers  </button> 
                      <div class="dropdown-divider"></div>
                      <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1823="1823">Mark as Inactive</button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1824="1824">Delete</button>  
                   </div>
                </div>
                <span class="close-details ml-5" data-ember-action="" data-ember-action-1825="1825">
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm">
                      <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                   </svg>
                </span>
             </div>
          </div>
       </div>
       <div class="sub-tab">
          <ul class="nav nav-tabs nav-tabs-dashed">
             <!-- CONTACTS_SEGREGATION_SHOW_HIDE_CHECK --> <!-- isVendorRoute checked because both contacts will be listed under vendor route --> 
             <li id="ember1826" class="ember-view nav-item"><a href="#/contacts/2409693000000079003?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1827" class="ember-view nav-link">Overview</a></li>
             <li id="ember1828" class="ember-view nav-item"><a href="#/contacts/2409693000000079003/comments?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1829" class="ember-view nav-link">Comments</a></li>
             <li id="ember1830" class="active ember-view nav-item"><a href="#/contacts/2409693000000079003/sales?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1831" class="active ember-view nav-link">Transactions</a></li>
               
             <li id="ember1832" class="ember-view nav-item"><a href="#/contacts/2409693000000079003/emailhistory?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1833" class="ember-view nav-link">Mails</a></li>
             <li id="ember1834" class="ember-view nav-item"><a href="#/contacts/2409693000000079003/statement?filter_by=Status.All&amp;per_page=25&amp;sort_column=customer_name&amp;sort_order=A" id="ember1835" class="ember-view nav-link">Statement</a></li>
              
          </ul>
       </div>
       <div id="ember1837" class="ember-view scroll-y noscroll-x fill body scrollbox txn-list pb-0">
          <div class="fill-container top-bar">
             <div id="ember1838" class="dropdown ember-view">
                <button id="ember1839" class="dropdown-toggle ember-view cursor-pointer btn btn-secondary"> Go to transactions </button> 
                <div id="ember1840" class="dropdown-menu ember-view scrollmenu"> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1841="1841">Invoice</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1842="1842">Customer Payment</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1843="1843">Estimate</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1844="1844">Recurring Invoice</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1845="1845">Expense</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1846="1846">Journals</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1847="1847">Credit Note</button> </div>
             </div>
          </div>
          <div id="ember1848" class="ember-view">
             <div id="ember1849" class="entity-grp ember-view">
                <div id="invoice" class="clearfix">
                   <p id="ember1850" class="ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Invoice 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      <div id="ember1964" class="dropdown ember-view coll float-left">
                         <span id="ember1965" class="dropdown-toggle ember-view cursor-pointer text-blue btn btn-xs"><span class="text-muted">Status:</span> All </span> 
                         <div id="ember1966" class="dropdown-menu dropdown-menu-right ember-view scrollmenu"> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1967="1967">All</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1968="1968">Draft</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1969="1969">Client Viewed</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1970="1970">Partially Paid</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1971="1971">Unpaid</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1972="1972">Overdue</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1973="1973">Paid</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-1974="1974">Void</button> </div>
                      </div>
                      <div class="coll float-left">
                         
                         <a href="#/invoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1852" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1853" class="ember-view collapse show" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Date">
                                     Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Invoice#">
                                     Invoice#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference#">
                                     Reference#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Amount">
                                     Amount
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Balance Due">
                                     Balance Due
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Status">
                                     Status
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="6">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no invoices <a href="#/invoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1953" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1954" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1955="1955">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1956="1956">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1957="1957">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1860" class="entity-grp ember-view">
                <div id="customer_payment" class="clearfix">
                   <p id="ember1861" class="ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Customer Payment 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         
                         <a href="#/contacts/2409693000000079003/customerpayment" id="ember1863" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                      </div>
                   </div>
                </div>
                <div id="ember1864" class="ember-view collapse show" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Date">
                                     Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Payment#">
                                     Payment#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference#">
                                     Reference#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Payment Mode">
                                     Payment Mode
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Amount Received">
                                     Amount Received
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Unused Amount">
                                     Unused Amount
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="6">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     No Payments Received yet.  
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1960" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1961="1961">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1962="1962">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1963="1963">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1871" class="entity-grp ember-view">
                <div id="estimate" class="clearfix">
                   <p id="ember1872" class="collapsed ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Estimate 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         
                         <a href="#/quotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1874" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1875" class="ember-view collapse" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Date">
                                     Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Estimate#">
                                     Estimate#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference#">
                                     Reference#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Amount">
                                     Amount
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Status">
                                     Status
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="5">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no estimates <a href="#/quotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1882" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1883" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1884="1884">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1885="1885">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1886="1886">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1887" class="entity-grp ember-view">
                <div id="recurring_invoice" class="clearfix">
                   <p id="ember1888" class="collapsed ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Recurring Invoice 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         
                         <a href="#/recurringinvoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1890" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1891" class="ember-view collapse" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left asc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Profile Name">
                                     Profile Name
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Frequency">
                                     Frequency
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Last Invoice Date">
                                     Last Invoice Date
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Next Invoice Date">
                                     Next Invoice Date
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Status">
                                     Status
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="5">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no recurring invoices <a href="#/recurringinvoices/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1898" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1899" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1900="1900">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1901="1901">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1902="1902">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1903" class="entity-grp ember-view">
                <div id="expense_mi" class="clearfix">
                   <p id="ember1904" class="collapsed ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Expense 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         <a href="#/expenses/new?customer_id=2409693000000079003&amp;customer_name=Zylker%20(Sample%20Client)" id="ember1906" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1907" class="ember-view collapse" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Date">
                                     Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Expense Category">
                                     Expense Category
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference#">
                                     Reference#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Amount">
                                     Amount
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Status">
                                     Status
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="5">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no expenses <a href="#/expenses/new?customer_id=2409693000000079003&amp;customer_name=Zylker%20(Sample%20Client)" id="ember1914" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1915" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1916="1916">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1917="1917">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1918="1918">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1919" class="entity-grp ember-view">
                <div id="journal" class="clearfix">
                   <p id="ember1920" class="collapsed ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Journals 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         
                         <a href="#/accountant/journals/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1922" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1923" class="ember-view collapse" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Date">
                                     Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Journal#">
                                     Journal#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference Number">
                                     Reference Number
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right   " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Debit">
                                     Debit
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right   " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Credit">
                                     Credit
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="5">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no journals created. <a href="#/accountant/journals/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1930" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1931" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1932="1932">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1933="1933">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1934="1934">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
             <div id="ember1935" class="entity-grp ember-view">
                <div id="creditnote" class="clearfix">
                   <p id="ember1936" class="collapsed ember-view cursor-pointer accord-title float-left">
                   <div class="font-large font-weight-light entity-title">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-muted arrow-down">
                         <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                      </svg>
                      Credit Note 
                   </div>
                   </p> 
                   <div class="line-seperator font-xs float-right">
                      
                      <div class="coll float-left">
                         
                         <a href="#/creditnotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1938" class="ember-view btn btn-link btn-xs">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxs">
                               <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                            </svg>
                            Add New 
                         </a>
                         
                      </div>
                   </div>
                </div>
                <div id="ember1939" class="ember-view collapse" style="">
                   <table class="table ">
                      <thead>
                         <tr class="grey-bg">
                            <th class=" text-left desc sortable " style="">
                               <div class="position-relative mr-4">
                                  <div class="float-left over-flow" title="Credit Date">
                                     Credit Date
                                  </div>
                                  <span class="sort d-print-none "></span>
                               </div>
                            </th>
                            <th class=" text-left  sortable " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Credit Note#">
                                     Credit Note#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Reference#">
                                     Reference#
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Balance">
                                     Balance
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-right  sortable " style="">
                               <div class="position-relative ">
                                  <div class=" over-flow" title="Amount">
                                     Amount
                                  </div>
                                  
                               </div>
                            </th>
                            <th class=" text-left   " style="">
                               <div class="position-relative ">
                                  <div class="float-left over-flow" title="Status">
                                     Status
                                  </div>
                                  
                               </div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td colspan="6">
                               <div class="text-center empty-msg">
                                  <p class="text-muted">
                                     There are no credit notes <a href="#/creditnotes/new?contact_id=2409693000000079003&amp;contact_name=Zylker%20(Sample%20Client)" id="ember1947" class="ember-view btn btn-link btn-xs"> - Add New </a> 
                                  </p>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                   <hr style="margin: 0">
                   <div showtotalcount="" id="ember1948" class="ember-view">
                      <div class="pagination clearfix d-print-none">
                         <div class="float-right page-item">
                             
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1949="1949">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M65.6 268l363.6 241.9c8.3 5.5 19.3-.4 19.3-10.4V15.7c0-9.9-11.1-15.8-19.3-10.4L65.6 247.2c-7.5 5-7.5 15.8 0 20.8z"></path>
                                  </svg>
                               </small>
                            </a>
                            <span></span> 
                            <a class="action page-link disabled" href="#" data-ember-action="" data-ember-action-1950="1950">
                               <small>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-top">
                                     <path d="M74.4 48.8V500c0 9.6 10.6 15.3 18.6 10l339.2-223.3c7.2-4.7 7.2-15.2.1-20C373.5 227.2 158.1 82.5 93.1 38.9c-7.9-5.4-18.7.3-18.7 9.9z"></path>
                                  </svg>
                               </small>
                            </a>
                             
                         </div>
                         <a href="#" data-ember-action="" data-ember-action-1951="1951">Total Count</a>  
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    
    <!-- RIGHT SIDE END -->
    
@endsection

@section('custom_js')
@endsection