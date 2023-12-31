<?php

namespace Database\Seeders;

use App\Models\Trening_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreningCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trening_category::create([
            'name'=>'Питание',
            'description'=>'Питание для спортсменов — что можно и нельзя есть спортсмену? Как сбалансировать своё питание при занятиях спортом или наборе мышечной массы? ЗОЖ. Питание. Диеты. Здоровье. Правильное питание для спортсмена столь же важно, как и регулярные тренировки.',
            'category_img'=>' '
        ]);
        Trening_category::create([
            'name'=>'Йога',
            'description'=>'Сейчас же, в век интернета, заниматься йогой можно не выходя из дома. Йогой онлайн уже никого не удивишь, т.к. есть множество онлайн-занятий йогой и множество онлайн школ йоги. Даже классической йогой занимаются на огромном количестве онлайн-площадок.',
            'category_img'=>' '
        ]);
        Trening_category::create([
            'name'=>'Растяжка',
            'description'=>'Упражнения на растяжку — комплекс базовых упражнений для быстрой растяжки мышц. Упражнения для растяжки рук, ног, шеи, мышц кора и поясницы. Растяжка мышц всего тела нужна всем, как спортсменам, так и людям с преимущественно сидячим образом жизни.',
            'category_img'=>' '
        ]);
        Trening_category::create([
            'name'=>'Общая физическая подготовка',
            'description'=>'Система упражнений для укрепления здоровья и развития наиболее полезных и необходимых в жизни физических качеств, таких как: ловкость, координация, выносливость, гибкость, скорость, сила, направленных на всестороннее физическое развитие человека',
            'category_img'=>' '
        ]);
        Trening_category::create([
            'name'=>'Теннис',
            'description'=>'Обучение теннису в TennisOcean обычно проходит в виде групповых и индивидуальных занятий. Малыши начинают играть лёгкими ракетками и поролоновыми мячами, что позволяет получить от тренировки максимум эффекта.',
            'category_img'=>' '
        ]);
    }
}
