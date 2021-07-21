<?php

namespace App\DataFixtures;

use App\Entity\Experience;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use Doctrine\DBAL\Types\DateType;
use Doctrine\Persistence\ObjectManager;

class ExperienceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $xp = new Experience();
        $xp->setTitle('Tokyo Tower');
        $xp->setContent('La tour de Tokyo est une tour rouge et blanche située dans l\'arrondissement de Minato à Tokyo. Son concept est fondé sur celui de la tour Eiffel de Paris. Elle a été réalisée par l\'architecte Tachū Naitō. La tour mesure 332,6 mètres de haut ce qui en fait l\'une des plus hautes tours en métal du monde.');
        $xp->setCity('Minato');
        $xp->setImage('https://ds1.static.rtbf.be/article/image/1248x702/8/5/6/istock_155383524.2967e110302.original.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_3'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Unicorn Gundam Statue');
        $xp->setContent('Dans le nord de Tokyo, du côté du quartier d\'Odaiba et à quelques pas du Unko Museum, trône fièrement le Unicorn Gundam, une statue géante de Gundam qui bouge et s\'illumine au cours de la journée et de la nuit. 
        Gundam ou Mobile Suit Gundam est une franchise de mecha, des personnages aux armures robotisés qui se sont emparés de la télévision japonaise en 1979 avant de venir une franchise complète de mangas, goodies et surtout de Gunpla, des maquettes de mecha à assembler et à personnaliser.');
        $xp->setCity('Odaiba');
        $xp->setImage('https://nippon-touch.com/wp-content/uploads/Gundam-Odaiba.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_4'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Asakusa Temple');
        $xp->setContent('Senso-ji est le plus vieux temple bouddhiste de Tokyo, situé dans le quartier d\'Asakusa au bord de la rivière Sumida. Érigé en l\'honneur de la déesse Kannon, il est aujourd\'hui l\'un des lieux touristiques préférés de la capitale pour ses couleurs flamboyantes et l\'atmosphère populaire et commerçante qui y règne.');
        $xp->setCity('Asakusa');
        $xp->setImage('https://mywowo.net/media/images/cache/tokyo_tempio_buddista_senso_ji_01_introduzione_jpg_1200_630_cover_85.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_0'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Parc du Mémorial de la Paix de Hiroshima');
        $xp->setContent('Le parc du Mémorial de la Paix de Hiroshima est un parc situé dans le centre-ville de Hiroshima. Ouvert le 1er avril 1954, il fut créé par l\'architecte Kenzō Tange afin de commémorer les victimes du bombardement atomique de Hiroshima.');
        $xp->setCity('Hiroshima');
        $xp->setImage('https://www.planetware.com/photos-large/JPN/japan-hiroshima-peace-memorial-park-3.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_1'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Le Grand Buddha de Kamakura');
        $xp->setContent('Kotoku-in est un temple bouddhiste situé dans la ville de Kamakura, station balnéaire au sud de la capitale tokyoïte, dans la préfecture de Kanagawa. Il est notamment connu pour exposer Daibutsu, un grand Bouddha assis en bronze.');
        $xp->setCity('Kamakura');
        $xp->setImage('https://d1nwfvw9iqnfnz.cloudfront.net/filters:autojpg()/filters:quality(80)/fit-in/800x800/gowithguide/profiles/6018/85464.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_0'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Lac Ashi');
        $xp->setContent('Hakone est une ville de la préfecture de Kanagawa, à 80 kilomètres au sud-ouest de Tokyo. Nichée à flanc de montagne, cette station thermale est très prisée des touristes pour ses sources chaudes naturelles et son lac Ashi d\'où on aperçoit le Mont Fuji par temps clair.');
        $xp->setCity('Hakone');
        $xp->setImage('https://media.routard.com/image/91/3/photo-basa-1.1455913.w740.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_2'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Todai-ji');
        $xp->setContent('Le Todai-ji est un temple bouddhique situé à Nara, sur l\'île principale de Honshu. Ce grand temple de l\'est abrite notamment le bâtiment Daibutsu-den, connue pour être la plus grande construction en bois du monde et hébergeant un monumental Grand Bouddha assis en bronze.');
        $xp->setCity('Nara');
        $xp->setImage('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Yakushiji_Nara03s3s4350.jpg/1200px-Yakushiji_Nara03s3s4350.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_0'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Kinkaku-ji, le Pavillon d\'or de Kyoto');
        $xp->setContent('Le temple Kinkakuji, sur la liste de patrimoine mondial de l\'UNESCO, est un des plus beaux temples bouddhistes que l\'on puisse admirer au Japon. Il se trouve à Kyoto, ancienne capitale et ville incontournable lors d\'un voyage  au Japon. Au début, Kinkaku ji était une villa appartenant à un riche seigneur du 14ème siècle. A sa mort, il fut transformé en temple selon la volonté du défunt. Le temple que l\'on admire aujourd\'hui est une reconstruction qui date de 1955.');
        $xp->setCity('Kyoto');
        $xp->setImage('https://cdn.omni-links.com/eurex/136779b1-ddce-44ba-8e53-7d4651ab68d7.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_0'));
        $manager->persist($xp);

        $xp = new Experience();
        $xp->setTitle('Dōtonbori');
        $xp->setContent('Dōtonbori est l\'une des principales destinations touristiques de la ville d\'Osaka. C\'est une rue unique, longeant le canal Dōtonbori entre le pont Dōtonbori et le pont Nipponbashi, dans le quartier de Namba. Ancien quartier de plaisir, Dōtonbori est célèbre pour ses théâtres historiques (aujourd\'hui tous disparus), ses magasins, ses restaurants et ses nombreuses enseignes lumineuses, comme celle du confiseur Ezaki Glico qui représente un coureur passant la ligne d\'arrivée.');
        $xp->setCity('Osaka');
        $xp->setImage('https://www.leblogdesarah.com/wp-content/uploads/2021/02/osaka-dotombori-enseignes-1024x680.jpg');
        $xp->setCreatedAt(new \DateTimeImmutable());
        $xp->setUpdatedAt(new \DateTimeImmutable());
        $xp->setCategory($this->getReference('category_4'));
        $manager->persist($xp);

        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            CategoryFixtures::class
        ];
    }
}
