<div id="skills" class="skills-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- skills text -->
            <div class="skills__text">
                <div class="text-box-inline">
                    <span class="subtitle">my skills</span>
                    <h2>
                        What My Programming
                        <br>
                        Skills Included?
                    </h2>
                    <p>I develop simple, intuitive and responsive user interface that helps users get things done with less effort and time with those technologies.</p>

                    <!-- switcher button -->
                    <div class="skills__text__switcher toggle-switch-btn">
                        <input id="skills-list" type="radio" name="items_type" value="skills" checked>
                        <label for="skills-list" class="link-hover">Skills</label>

                        <input id="tools-list" type="radio" name="items_type" value="tools">
                        <label for="tools-list" class="link-hover">Tools</label>

                        <span class="switcher-toggle" style="width: calc((100% - 0.5rem) / 2);"></span>
                    </div>
                </div>
            </div>

            <!-- skills items -->
            <div class="skills__wrapper">

                <!-- skills list -->
                <ul class="skills__items" data-stagger-delay="50" data-type="skills">
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                    <x-skill-list-item/>
                </ul>

                <!-- tools list -->
                <ul class="skills__items" data-stagger-delay="50" data-type="tools" style="display: none;">
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                    <x-tools-list-item/>
                </ul>
            </div>
        </div>
    </div>
</div>
