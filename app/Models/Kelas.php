<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model {
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];
    public function siswa(): HasMany {
        return $this->hasMany(Siswa::class);
    }
    public function waliKelas(): BelongsTo {
        return $this->belongsTo(Guru::class, 'wali_kelas_id');
    }
    public function getNamaLengkapAttribute(): string {
        return "{$this->tingkat} {$this->kelas}";
    }
}
