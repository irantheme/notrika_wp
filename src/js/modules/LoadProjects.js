import $ from 'jquery';
import MasonryJs from './MasonryJs';
/* ===============================================================
  Load Projects
=============================================================== */
class LoadProjects {
  constructor() {
    this.btnLoad = $('#loading-projects');
    this.masonryJs = new MasonryJs();
    this.events();
  }

  events() {
    // Loading remaining of projects in click load button
    this.btnLoad.on('click', () => {
      this.btnLoad.addClass('active');
      setTimeout(() => {
        this.loadingProjects();
      }, 1000);
      setTimeout(() => {
        this.btnLoad.removeClass('active');
        this.hideLoadingButton();
      }, 1001);
    });
    $(window).trigger('resize').trigger('scroll');
  }

  // Check remaining projects for hiding button load
  hideLoadingButton() {
    // Get current body project length
    $.getJSON(wpData.root_url + '/wp-json/json/v1/projects', (result) => {
      let projectCounts = $('#projects .post-holder').length;
      // Get unload project length
      var projectUnloadCount = 0;
      // Assign length unload project
      projectUnloadCount = result.projects.length;
      // Check count of current project and unload project
      if (projectCounts >= projectUnloadCount) $('.load-more').hide();
    });
  }

  // Get json data projects
  loadingProjects() {
    // Get json data with api
    $.getJSON(wpData.root_url + '/wp-json/json/v1/projects', (result) => {
      // Temporary projects of result project
      let projects = result.projects;
      // Get length of body projects
      let currentProjectsCount = $('#projects .post-holder').length;
      // Slicing body projects from loaded projects
      projects.splice(0, currentProjectsCount);
      // Divide projects to sliced projects
      projects = projects.splice(0, 6);
      // Append rest projects
      $('#projects .container .grid-masonry').append(`
          ${projects
            .map(
              (item) => `
              <div class="grid-item post-holder" data-cate="${
                item.dataCategory
              }">
                <article class="post">
                  <a href="${item.permalink}" class="post-link">
                  ${(() => {
                    let output = `
                      <div class="post-image">
                        <img src="${item.imageSrc}" alt="تصویر پروژه">
                      </div>
                      <div class="post-content">
                        <div class="post-heading">
                          <h2>${item.title}</h2>
                        ${(() => {
                          if (item.category) {
                            // Category holder temp
                            var cate_temp = '';
                            // Add parent tag
                            cate_temp += '<div class="post-categories">';
                            // Loop from keys and append to cate temp
                            for (let i = 0; i < item.category.length; i++) {
                              let key = Object.keys(item.category[i]);
                              cate_temp += '<span>' + key + '</span>';
                            }
                            // Add ending parent tag
                            cate_temp += '</div>';
                          }
                          return cate_temp;
                        })()}
                      </div>
                      <div class="post-icons">
                        <i class="lni lni-full-screen"></i>
                        <i class="lni lni-link"></i>
                      </div>
                      </div>
                      `;
                    return output;
                  })()}
                  <a/>
                </article>
              </div>
            `
            )
            .join('')}
        `);
      this.masonryJs.masonryInit();
    });
  }
}

export default LoadProjects;
