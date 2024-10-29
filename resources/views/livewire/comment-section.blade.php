<div class="w-full mx-auto p-4">
    <div class="p-4 bg-white rounded-xl shadow-lg">
        <div class="flex gap-2 items-center flex-col space-y-2">
            <textarea wire:model="newComment" class="w-full p-2 border  rounded-lg focus:outline-none min-h-28"
                placeholder="Write your comment..."></textarea>
            <button wire:click="postComment"
                class="bg-green-600 text-white drop-shadow-md px-4 py-2 rounded-lg self-end font-bold capitalize">
                Add comment
            </button>
        </div>

        <!-- Comment List -->
        <div class="space-y-4 mt-4 w-full">
            @foreach($comments as $comment)

            <div class="border-b pb-2">
                <x-post-comment :comment="$comment" wire:key='$comment->id' :replyingTo="$replyingTo" />
            </div>
            @endforeach
        </div>
    </div>
</div>