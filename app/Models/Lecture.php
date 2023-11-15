// app/Models/Lecture.php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    protected $fillable = ['section_id', 'title', 'description', 'video_url', 'order'];

    // Relationships
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
