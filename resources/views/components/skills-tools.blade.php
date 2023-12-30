<div id="skills" class="skills-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- skills text -->
            <div class="skills__text">
                <div class="text-box-inline">
                    <span class="subtitle">my skills</span>
                    <h2>
                        Crafting Digital Magic
                    </h2>
<p>I go beyond pretty interfaces. With expertise in Laravel and PHP, I shape seamless digital products that not only look good but work effortlessly. Let's build products that speak simplicity and functionality, making a real impact in the digital realm.</p>
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
                    @foreach($skills as $skill)
                        <x-skill-list-item :skill="$skill"/>
                    @endforeach
                </ul>

                <!-- tools list -->
                <ul class="skills__items" data-stagger-delay="50" data-type="tools" style="display: none;">
                    @foreach($tools as $tool)
                        <x-tools-list-item :tool="$tool"/>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
