<div>
    <!-- Admin Create Record Form -->
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="fw-bold mb-3">Create a new record</h4>
            <form wire:submit.prevent="save">
                <input wire:model.lazy='date' type="date" class="form-control mb-2" required>
                <input wire:model.lazy='topic' type="text" class="form-control mb-2" placeholder="Write the topic.." required>
                <input wire:model.lazy='amlink' type="text" class="form-control mb-2" placeholder="AM Link" required>
                <input wire:model.lazy='pmlink' type="text" class="form-control mb-2" placeholder="PM Link" required>
                <input wire:model.lazy='notes' type="text" class="form-control mb-2" placeholder="Other notes..">
                <button class="btn btn-dark">＋ New Recording</button>
            </form>
        </div>
    </div>
</div>