// app/Models/Category.php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    // Relationships
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
