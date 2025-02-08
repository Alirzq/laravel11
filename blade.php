<form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE') <!-- Method spoofing untuk DELETE request -->
    <button type="submit" class="px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded-lg transition duration-300 ease-in-out" onclick="return confirm('Are you sure you want to delete this student?');">
        Delete
    </button>
</form> 