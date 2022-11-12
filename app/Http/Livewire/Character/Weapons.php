<?php

namespace App\Http\Livewire\Character;

use App\Models\Dice;
use App\Models\Weapon;
use App\Traits\HasCharacter;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Weapons extends Component
{
    use HasCharacter;

    public Collection $weapons;

    protected $rules = [
        'weapons.*.name' => 'nullable',
        'weapons.*.attack_bonus' => 'nullable',
        'weapons.*.damage_type' => 'nullable',
    ];

    public function mount()
    {
        $this->updateCharacter();
        $this->updateWeapons();
    }

    public function render()
    {
        return view('livewire.character.weapons');
    }

    public function updateWeapons()
    {
        $this->weapons = $this->character->weapons;
    }

    public function addWeapon()
    {
        Weapon::create([
            'character_id' => $this->character->id,
        ]);

        $this->character->refresh();
        $this->updateWeapons();
    }

    public function deleteWeapon($id)
    {
        Weapon::find($id)->delete();

        $this->character->refresh();
        $this->updateWeapons();
    }

    public function updatedWeapons($value, $name)
    {
        list($wid, $property) = str($name)->explode('.');

        $this->weapons[$wid]->save();
    }

    public function rollAttackBonus($wid)
    {
        $roll = Dice::roll(modifier: $this->weapons[$wid]->attack_bonus);

        $this->emit('rollResult', [
            'for' => 'Attack',
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }

    public function rollDamage($wid)
    {
        // Attempt to guess at this - ex: if people write 2d8+4 slashing
        $damage = explode(' ', $this->weapons[$wid]->damage_type);
        $roll = Dice::roll(expression: $damage[0]);

        $this->emit('rollResult', [
            'for' => 'Damage',
            'total' => $roll['total'],
            'details' => $roll['details'],
        ]);
    }
}
