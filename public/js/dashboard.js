//profile dropdown
    function toggleDropdown() {
        document.getElementById('profileDropdown').classList.toggle('hidden');
    }

    // Optional: Close when clicking outside
    window.addEventListener('click', function(e) {
        const dropdown = document.getElementById('profileDropdown');
        if (!e.target.closest('.relative')) {
            dropdown.classList.add('hidden');
        }
    });


    document.addEventListener('DOMContentLoaded', () => {
        
        // --- Curriculum Roadmap Builder ---
        const moduleContainer = document.getElementById('module-container');
        const addModuleBtn = document.getElementById('add-module-btn');

        function initModule(module) {
            const header = module.querySelector('.accordion-header');
            const content = module.querySelector('.accordion-content');
            const icon = header.querySelector('[data-icon^="expand"]');
            const removeBtn = module.querySelector('.remove-module-btn');

            header.addEventListener('click', (e) => {
                if (e.target.tagName === 'INPUT') return;
                
                const isCollapsed = content.classList.contains('collapsed');
                
                if (isCollapsed) {
                    content.classList.remove('collapsed');
                    icon.textContent = 'expand_less';
                    icon.setAttribute('data-icon', 'expand_less');
                    module.classList.remove('bg-surface-container-low');
                    module.classList.add('bg-surface');
                } else {
                    content.classList.add('collapsed');
                    icon.textContent = 'expand_more';
                    icon.setAttribute('data-icon', 'expand_more');
                    module.classList.add('bg-surface-container-low');
                    module.classList.remove('bg-surface');
                }
            });

            // Topic Removal
            module.addEventListener('click', (e) => {
                if (e.target.closest('.remove-topic')) {
                    e.target.closest('.remove-topic').parentElement.remove();
                }
            });

            // Add Topic
            const addTopicBtn = module.querySelector('.add-topic-btn');
            addTopicBtn.addEventListener('click', () => {
                const topicName = prompt("Enter topic name:");
                if (topicName && topicName.trim()) {
                    const newTopic = document.createElement('span');
                    newTopic.className = "inline-flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-full text-xs font-medium text-primary";
                    newTopic.innerHTML = `
                        ${topicName}
                        <button class="remove-topic material-symbols-outlined text-sm" data-icon="close">close</button>
                    `;
                    addTopicBtn.before(newTopic);
                }
            });

            // Remove Module
            if (removeBtn) {
                removeBtn.addEventListener('click', () => {
                    if(confirm("Remove this module?")) {
                        module.classList.add('opacity-0', 'translate-x-4');
                        setTimeout(() => {
                            module.remove();
                            updateModuleNumbers();
                        }, 300);
                    }
                });
            }
        }

        function updateModuleNumbers() {
            document.querySelectorAll('.module-item').forEach((mod, index) => {
                const num = (index + 1).toString().padStart(2, '0');
                mod.querySelector('.module-number').textContent = num;
            });
        }

        // Initialize existing modules
        document.querySelectorAll('.module-item').forEach(initModule);

        // Add New Module
        addModuleBtn.addEventListener('click', () => {
            const count = document.querySelectorAll('.module-item').length + 1;
            const formattedCount = count < 10 ? '0' + count : count;
            
            const newModule = document.createElement('div');
            newModule.className = "module-item border border-outline-variant border-opacity-20 rounded-xl overflow-hidden bg-surface-container-low group hover:border-secondary/30 transition-all duration-300";
            newModule.innerHTML = `
                <div class="accordion-header flex items-stretch cursor-pointer">
                    <div class="w-12 flex flex-col items-center justify-center bg-surface-container-high/50 text-outline-variant">
                        <span class="material-symbols-outlined" data-icon="drag_indicator">drag_indicator</span>
                    </div>
                    <div class="flex-1 p-6 flex items-center gap-6">
                        <span class="module-number h-10 w-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-bold text-sm shrink-0">${formattedCount}</span>
                        <input class="flex-1 bg-transparent border-none text-xl font-headline font-bold text-on-surface-variant focus:ring-0 p-0" placeholder="New Module Title" type="text" value=""/>
                        <span class="material-symbols-outlined text-outline-variant transform transition-transform" data-icon="expand_more">expand_more</span>
                    </div>
                </div>
                <div class="accordion-content collapsed p-6 space-y-6">
                    <textarea class="w-full bg-surface-container-lowest border-none focus:ring-0 font-body text-sm text-on-surface-variant p-4 italic rounded-lg" placeholder="Brief overview of the day's clinical focus..." rows="2"></textarea>
                    <div>
                        <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">Sub-topics & Focus Areas</label>
                        <div class="topic-list flex flex-wrap gap-2">
                            <button class="add-topic-btn inline-flex items-center gap-1 bg-transparent border border-dashed border-outline-variant px-4 py-2 rounded-full text-xs font-bold text-secondary hover:bg-secondary-fixed/10 transition-colors">
                                <span class="material-symbols-outlined text-xs" data-icon="add">add</span> New Topic
                            </button>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-end">
                        <button class="remove-module-btn text-xs font-bold text-error flex items-center gap-1 hover:underline">
                            <span class="material-symbols-outlined text-sm" data-icon="delete">delete</span> Remove Module
                        </button>
                    </div>
                </div>
            `;
            moduleContainer.appendChild(newModule);
            initModule(newModule);
        });

        // --- Strategic Bonuses ---
        const bonusContainer = document.getElementById('bonus-container');
        const addBonusBtn = document.getElementById('add-bonus-btn');

        function initBonus(bonus) {
            const removeBtn = bonus.querySelector('.remove-bonus');
            removeBtn.addEventListener('click', () => {
                bonus.style.opacity = '0';
                bonus.style.transform = 'scale(0.95)';
                setTimeout(() => bonus.remove(), 200);
            });
        }

        document.querySelectorAll('.bonus-item').forEach(initBonus);

        addBonusBtn.addEventListener('click', () => {
            const newBonus = document.createElement('div');
            newBonus.className = "bonus-item p-6 bg-surface rounded-xl border border-outline-variant border-opacity-15 hover:border-secondary/30 hover:bg-surface-bright transition-all group flex flex-col gap-6 opacity-0 scale-95 duration-200";
            newBonus.innerHTML = `
                <div class="flex items-start gap-6">
                    <div class="w-12 h-12 bg-surface-container-low rounded-lg flex items-center justify-center text-secondary shrink-0">
                        <span class="material-symbols-outlined" data-icon="redeem">redeem</span>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Bonus Title</label>
                        <input class="w-full bg-transparent border-none focus:ring-0 font-headline text-xl font-bold text-primary p-0" type="text" placeholder="New Strategic Bonus" value=""/>
                    </div>
                    <div class="w-40 border-l border-outline-variant border-opacity-20 pl-6">
                        <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Value (USD)</label>
                        <div class="flex items-center gap-1">
                            <span class="text-secondary font-bold">$</span>
                            <input class="w-full bg-transparent border-none focus:ring-0 font-body font-bold text-secondary text-lg p-0" type="text" value="0"/>
                        </div>
                    </div>
                    <button class="remove-bonus material-symbols-outlined text-outline-variant hover:text-error transition-colors p-2 hover:bg-error/5 rounded-full" data-icon="delete_outline">delete_outline</button>
                </div>
                <div class="pl-[72px]">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-2">Bonus Description</label>
                    <textarea class="w-full bg-surface-container-low border border-outline-variant border-opacity-20 rounded-lg p-3 font-body text-sm text-on-surface-variant focus:border-secondary focus:ring-0" placeholder="Describe the strategic advantage of this bonus..." rows="2"></textarea>
                </div>
            `;
            bonusContainer.appendChild(newBonus);
            setTimeout(() => {
                newBonus.classList.remove('opacity-0', 'scale-95');
                newBonus.classList.add('opacity-100', 'scale-100');
            }, 10);
            initBonus(newBonus);
        });

        // --- Enrollment Status Toggles ---
        const statusButtons = document.querySelectorAll('.status-btn');
        statusButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                statusButtons.forEach(b => {
                    b.classList.remove('bg-secondary', 'text-white', 'shadow-md');
                    b.classList.add('text-on-surface-variant', 'hover:text-primary');
                });
                btn.classList.add('bg-secondary', 'text-white', 'shadow-md');
                btn.classList.remove('text-on-surface-variant', 'hover:text-primary');
            });
        });

        // Add tactile feedback to existing buttons
        document.querySelectorAll('button:not([active\\:scale-95])').forEach(btn => {
            btn.classList.add('active:scale-95', 'transition-transform');
        });
    });

    document.addEventListener("DOMContentLoaded", function () {

    const uploadBtn = document.getElementById("uploadBtn");
    const fileInput = document.getElementById("mentorImageInput");
    const preview = document.getElementById("mentorPreview");

    // Open file picker
    uploadBtn.addEventListener("click", function () {
        fileInput.click();
    });

    // Image preview + validation
    fileInput.addEventListener("change", function (event) {
        const file = event.target.files[0];

        if (!file) return;

        // Validate type
        if (!file.type.startsWith("image/")) {
            alert("Please select a valid image.");
            fileInput.value = "";
            return;
        }

        // Validate size (2MB max)
        if (file.size > 2 * 1024 * 1024) {
            alert("Image must be less than 2MB.");
            fileInput.value = "";
            return;
        }

        // Preview
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
    });

});
