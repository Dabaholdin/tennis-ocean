<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Trening;
use Illuminate\Database\Seeder;
use App\Models\Trening_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeedAll extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'Admin','id'=>1]);
        Role::create(['name'=>'User','id'=>2]);
        Trening_category::create([
            'id'=> 1,
            'name'=>'Питание',
            'description'=>'Питание для спортсменов — что можно и нельзя есть спортсмену? Как сбалансировать своё питание при занятиях спортом или наборе мышечной массы? ЗОЖ. Питание. Диеты. Здоровье. Правильное питание для спортсмена столь же важно, как и регулярные тренировки.',
            'category_img'=>'pitanie.png'
        ]);
        Trening_category::create([
            'id'=> 2,
            'name'=>'Йога',
            'description'=>'Сейчас же, в век интернета, заниматься йогой можно не выходя из дома. Йогой онлайн уже никого не удивишь, т.к. есть множество онлайн-занятий йогой и множество онлайн школ йоги. Даже классической йогой занимаются на огромном количестве онлайн-площадок.',
            'category_img'=>'yoga.png'
        ]);
        Trening_category::create([
            'id'=> 3,
            'name'=>'Растяжка',
            'description'=>'Упражнения на растяжку — комплекс базовых упражнений для быстрой растяжки мышц. Упражнения для растяжки рук, ног, шеи, мышц кора и поясницы. Растяжка мышц всего тела нужна всем, как спортсменам, так и людям с преимущественно сидячим образом жизни.',
            'category_img'=>'rastyajca.png'
        ]);
        Trening_category::create([
            'id'=> 4,
            'name'=>'Общая физическая подготовка',
            'description'=>'Система упражнений для укрепления здоровья и развития наиболее полезных и необходимых в жизни физических качеств, таких как: ловкость, координация, выносливость, гибкость, скорость, сила, направленных на всестороннее физическое развитие человека',
            'category_img'=>'ofp.png'
        ]);
        Trening_category::create([
            'id'=> 5,
            'name'=>'Теннис',
            'description'=>'Обучение теннису в TennisOcean обычно проходит в виде групповых и индивидуальных занятий. Малыши начинают играть лёгкими ракетками и поролоновыми мячами, что позволяет получить от тренировки максимум эффекта.',
            'category_img'=>'tennis.png'
        ]);
        Trening::create([
            
            'category_id'=> 1,
            'title'=> 'Тренировка  1й категории',
            'title_description'=>'Заголовок пписания',
            'description'=>'Описание',
            'trening_method'=>'Групповая тренировка',
            'trening_type'=>'online',
            'trening_img'=>'',
            'price'=> 1000,
            'price_prefix'=>'от',
            'free_type'=>'youtube',
            'free_description'=>'youtube video',
            'free_video_url'=>'https://youtu.be/uRP2WiV5KI4?si=HOkJ74iYhFBhd-3D',
            
        ]);
        Trening::create([
            
            'category_id'=> 2,
            'title'=> 'Тренировка  2й категории',
            'title_description'=>'Заголовок пписания',
            'description'=>'Описание',
            'trening_method'=>'Групповая тренировка',
            'trening_type'=>'offline',
            'trening_img'=>'',
            'price'=>2000,
            'price_prefix'=>'от',
            'free_type'=>'video',
            'free_description'=>'inserted video',
            'free_video_url'=>'https://youtu.be/uRP2WiV5KI4?si=HOkJ74iYhFBhd-3D',
            
        ]);
        Trening::create([
            
            'category_id'=> 3,
            'title'=> 'Тренировка  3й категории',
            'title_description'=>'Заголовок пписания',
            'description'=>'Описание',
            'trening_method'=>'Групповая тренировка',
            'trening_type'=>'abonement',
            'trening_img'=>'',
            'price'=>3000,
            'price_prefix'=>'от',
            'free_type'=>'img',
            'free_description'=>'image',
            'free_video_url'=>'',
            
        ]);
    }
}
