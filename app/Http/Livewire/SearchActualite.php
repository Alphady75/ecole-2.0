<?php

namespace App\Http\Livewire;

use App\Models\Actualite;
use Livewire\Component;

class SearchActualite extends Component
{
    public function render()
    {
        return view('livewire.search-actualite');
    }

    /* La fonction de suppression des mots inutiles pour la recherche */
    private function remove_not_usefull_words($str)
    {
        // to lower case
        $str = strtolower($str);

        // exclude words (rajouter ceux qui manquent)
        $not_use_words = [
            'comment', 'que', 'qui', 'quand', 'pourquoi', 'pour', 'quoi',
            'comme', 'avec', 'sans', 'faire', 'avoir', 'être', 'mais',
            'ou', 'et', 'donc', 'or', 'ni', 'car', 'si', 'de', 'des',
            'un', 'une', 'juste', 'qu', 'est', 'sont', 'lors', 'en', 'a'
        ];

        $len = count($not_use_words);
        // remove words
        for ($i = 0; $i < $len; $i++) {
            $str = str_replace($not_use_words[$i] . ' ', '', $str);
        }

        return $str;
    }

    /* La fonction de recherche des mots clés */
    public function search()
    {
        $search = $this->remove_not_usefull_words($this->search);
        $search = explode(' ', $search);
        $search = array_filter($search);
        $search = array_unique($search);
        $search = array_values($search);
        $search = implode(' ', $search);

        $actualites = Actualite::where('title', 'like', '%' . $search . '%')
            ->orWhere('content', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%')
            ->paginate(6);

        return view('livewire.search-actualite', compact('actualites'));
    }
}
