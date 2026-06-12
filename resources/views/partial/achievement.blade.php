@php($csrf = csrf_token())

<!-- Achievements Section -->
<section id="achievements" class="bg-white dark:bg-neutral-950 py-4 px-6 md:px-20">
    <header class="relative flex items-center mb-12 flex-wrap gap-4">

        <!-- Left placeholder to take space -->
        <div class="w-24 md:w-32" aria-hidden="true"></div>

        <!-- Center heading absolutely centered -->
        <h2
            class="absolute left-1/2 transform -translate-x-1/2 text-3xl md:text-4xl font-bold text-gray-900 dark:text-white whitespace-nowrap">
            Our Achievements
        </h2>

        <!-- Button on the right, normal flow -->
        <button id="addAchievementBtn"
            class="ml-auto btn btn-primary rounded-full px-4 py-2 text-sm font-semibold shadow hover:bg-blue-600"
            aria-haspopup="dialog" aria-controls="achievementModal" aria-expanded="false">
            ➕ Add Achievement
        </button>

    </header>


    <section id="achievementGrid" class="grid gap-10 md:grid-cols-3" aria-live="polite">
        @foreach ($achievements as $ac)
            <article id="ac-{{ $ac->id }}"
                class="group relative bg-white dark:bg-neutral-900 rounded-2xl p-8 shadow-md transition hover:-translate-y-1 hover:shadow-blue-400 flex flex-col items-center">

                <nav aria-label="Actions"
                    class="absolute top-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transition">
                    <button onclick="openModal({{ $ac->id }})"
                        class="w-7 h-7 bg-gray-200 dark:bg-neutral-700 rounded-full grid place-items-center text-gray-600 dark:text-gray-300 hover:text-blue-600"
                        title="Edit Achievement">✎</button>
                    <button onclick="deleteAchievement({{ $ac->id }})"
                        class="w-7 h-7 bg-gray-200 dark:bg-neutral-700 rounded-full grid place-items-center text-gray-600 dark:text-gray-300 hover:text-red-600"
                        title="Delete Achievement">✕</button>
                </nav>

                <i data-lucide="trophy"
                    class="w-12 h-12 text-blue-500 dark:text-blue-400 mb-4 transition-transform group-hover:scale-150"></i>

                <h3 class="text-xl font-semibold mb-2 text-center text-gray-800 dark:text-gray-100">
                    <span class="ac-year">{{ $ac->year }}</span>
                </h3>
                <p class="ac-title text-gray-600 dark:text-gray-400 text-sm text-center">{{ $ac->title }}</p>
            </article>
        @endforeach
        @if ($achievements->isEmpty())
            <p class="text-center text-muted col-span-full">No achievements yet.</p>
        @endif
    </section>

    <!-- Modal -->
    <section id="achievementModal" class="modal-overlay hidden" tabindex="-1" role="dialog" aria-modal="true"
        aria-labelledby="modalTitle" aria-hidden="true">
        <article class="modal-box relative" role="document">
            <button id="modalCloseBtn" type="button" aria-label="Close modal"
                class="absolute top-3 right-3 text-gray-400 hover:text-red-600 text-xl">✕</button>

            <h5 id="modalTitle" class="mb-4 text-center font-bold">Add New Achievement</h5>

            <form id="achievementForm" class="space-y-4" novalidate>
                <input type="hidden" name="_token" value="{{ $csrf }}">
                <input type="hidden" id="acId" name="id">

                <input type="number" name="year" id="year" placeholder="Year (e.g. 2025)" class="form-control"
                    required min="1900" max="2100">

                <input type="text" name="title" id="title" placeholder="Title (e.g. Delivered comms system)"
                    class="form-control" required maxlength="255">

                <nav class="flex justify-between pt-2" aria-label="Modal actions">
                    <button type="button" id="modalCancelBtn" class="btn btn-outline-danger">Cancel</button>
                    <button id="saveBtn" type="submit" class="btn btn-success">Save</button>
                </nav>
            </form>
        </article>
    </section>

    <style>
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .5);
            z-index: 50;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.hidden {
            display: none;
        }

        .modal-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            width: 90%;
            max-width: 400px;
        }

        .form-control {
            width: 100%;
            padding: .5rem .75rem;
            border: 1px solid #d1d5db;
            border-radius: .375rem;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const csrf = '{{ $csrf }}';
            const modal = document.getElementById('achievementModal');
            const addBtn = document.getElementById('addAchievementBtn');
            const closeBtn = document.getElementById('modalCloseBtn');
            const cancelBtn = document.getElementById('modalCancelBtn');
            const form = document.getElementById('achievementForm');
            const acIdFld = document.getElementById('acId');
            const yearFld = document.getElementById('year');
            const titleFld = document.getElementById('title');
            const modalTitle = document.getElementById('modalTitle');
            const grid = document.getElementById('achievementGrid');

            let editMode = false;

            function openModal(id = null) {
                editMode = !!id;
                modal.classList.remove('hidden');
                modal.setAttribute('aria-hidden', 'false');
                addBtn.setAttribute('aria-expanded', 'true');
                if (editMode) {
                    modalTitle.textContent = 'Edit Achievement';
                    const card = document.getElementById('ac-' + id);
                    acIdFld.value = id;
                    yearFld.value = card.querySelector('.ac-year').textContent.trim();
                    titleFld.value = card.querySelector('.ac-title').textContent.trim();
                } else {
                    modalTitle.textContent = 'Add New Achievement';
                    acIdFld.value = '';
                    form.reset();
                }
                yearFld.focus();
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.setAttribute('aria-hidden', 'true');
                addBtn.setAttribute('aria-expanded', 'false');
            }

            addBtn.addEventListener('click', () => openModal());

            closeBtn.addEventListener('click', closeModal);
            cancelBtn.addEventListener('click', closeModal);

            // Close modal on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            // Example placeholder for deleteAchievement, define according to your logic
            window.deleteAchievement = function(id) {
                if (!confirm('Delete this achievement?')) return;
                // perform your delete logic here (fetch, then remove from DOM)
                document.getElementById('ac-' + id)?.remove();
            };

            // Form submit handler
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                const id = acIdFld.value;
                const url = id ? `/achievements/${id}` : '/achievements';

                const fd = new FormData(form);
                if (id) fd.append('_method', 'PUT');

                try {
                    const res = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        body: fd
                    });
                    if (!res.ok) throw await res.json();
                    const {
                        achievement
                    } = await res.json();

                    if (id) {
                        // update existing
                        const card = document.getElementById('ac-' + id);
                        card.querySelector('.ac-year').textContent = achievement.year;
                        card.querySelector('.ac-title').textContent = achievement.title;
                    } else {
                        // add new card at start
                        grid.insertAdjacentHTML('afterbegin', cardMarkup(achievement));
                    }
                    closeModal();
                } catch (err) {
                    alert('Error saving achievement');
                }
            });

            function cardMarkup(a) {
                return `
        <article id="ac-${a.id}" class="group relative bg-white dark:bg-neutral-900 rounded-2xl p-8 shadow-md
          transition hover:-translate-y-1 hover:shadow-blue-400 flex flex-col items-center">
          <nav aria-label="Actions" class="absolute top-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transition">
            <button onclick="openModal(${a.id})"
                    class="w-7 h-7 bg-gray-200 dark:bg-neutral-700 rounded-full grid place-items-center
                           text-gray-600 dark:text-gray-300 hover:text-blue-600" title="Edit Achievement">✎</button>
            <button onclick="deleteAchievement(${a.id})"
                    class="w-7 h-7 bg-gray-200 dark:bg-neutral-700 rounded-full grid place-items-center
                           text-gray-600 dark:text-gray-300 hover:text-red-600" title="Delete Achievement">✕</button>
          </nav>
          <i data-lucide="trophy" class="w-12 h-12 text-blue-500 dark:text-blue-400 mb-4"></i>
          <h3 class="text-xl font-semibold mb-2 text-center text-gray-800 dark:text-gray-100">
              <span class="ac-year">${a.year}</span>
          </h3>
          <p class="ac-title text-gray-600 dark:text-gray-400 text-sm text-center">${a.title}</p>
        </article>`;
            }

            // Expose openModal globally for edit buttons
            window.openModal = openModal;
        });
    </script>
</section>
