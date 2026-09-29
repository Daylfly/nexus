<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model {
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'description', 'price', 'image_path'];
    /**
     * Отношение: товар принадлежит одной категории.
     */
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    /**
     * Scope фильтрации товаров по категории.
     */
    public function scopeFilter(Builder $query, array $filters): Builder {
        return $query->when($filters['category_id'] ?? null, function ($q, $catId) {
            $q->where('category_id', $catId);
        });
    }
}
