<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function freeServiceDetail($id)
{
    $course = Course::with(['modules.topics', 'bonuses', 'mentors', 'offer', 'tags'])
                    ->findOrFail($id);

    return view('pages.hospital.free_service_detail', compact('course'));

}

    public function show($service)
    {
        $services = [

            'behaviour-modification' => [
                'title' => 'Behaviour Modification',
                'image' => asset('assets/bg/behavior_modification.png'),
                'description' => 'Behaviour modification is a structured therapeutic approach that focuses on identifying and changing maladaptive patterns of behaviour. It is based on scientifically validated principles of learning, including reinforcement, conditioning, and habit formation.
At our centre, we begin with a detailed behavioural assessment to understand triggers, patterns, and maintaining factors. Based on this, individualized intervention plans are developed using techniques such as positive reinforcement, shaping, and behavioural tracking.
This service is especially helpful for children with behavioural concerns, individuals with impulse control difficulties, habit disorders, and those struggling with lifestyle changes. Caregiver and family involvement is often integrated to ensure consistency across environments.
Our goal is to promote sustainable behavioural change, improve self-regulation, and enhance overall functioning in daily life.
12-Session Floor Therapy Plan for Neurodevelopmental Disorders 
Session 1 – Building Connection Goal: Establish trust, comfort, and engagement. Activities: Get on the floor, follow the child’s lead. Play peek-a-boo, rolling ball, bubbles. Focus on shared joy. 
Session 2 – Shared Attention Goal: Encourage looking, joint focus. Activities: Play with turn-taking toys. Pause and wait for eye contact before continuing. Celebrate small attempts to connect. 
Session 3 – Communication Circles Goal: Open & close multiple circles of communication. Activities: Copy child’s sounds/movements. Use exaggerated facial expressions. Encourage back-and-forth interaction. 
Session 4 – Emotional Expression Goal: Help child express and recognize emotions. Activities: Play with puppets/dolls showing happy, sad, angry. Mirror child’s emotions. Label feelings during play. 
Session 5 – Expanding Play Themes Goal: Encourage imagination & symbolic play. Activities: Pretend cooking, feeding dolls, superhero play. Join child’s play and add new ideas. 
Session 6 – Sensory Engagement Goal: Support sensory processing needs. Activities: Sensory bins (sand, rice, water). Swinging, rolling, crawling tunnels. Calming deep pressure games. 
Session 7 – Problem Solving Together Goal: Encourage thinking and flexibility. Activities: Build block tower together, solve pretend problems. Obstacle course requiring help. Encourage child’s solutions. 
Session 8 – Social Turn-Taking Goal: Practice waiting and sharing. Activities: Board games, ball passing games, turn-taking songs. 
Session 9 – Expanding Communication Goal: Move from gestures to words/phrases. Activities: Encourage requests (“more”, “again”). Use choice boards. Model simple phrases. 
Session 10 – Emotional Regulation Goal: Teach calming strategies. Activities: Breathing with bubbles. “Turtle game”. Calm-down corner with soft toys. 
Session 11 – Group/Peer Play Goal: Practice social interaction with peers or siblings. Activities: Circle games, cooperative building. Role-play simple scripts. 
Session 12 – Generalization & Parent Training Goal: Equip parents to continue at home. Activities: Review progress with parents. Demonstrate strategies. Provide home play routine
Structure of Each Session • Warm-up (5 min): Free play, following the child’s lead. • Core activities (20–30 min): Based on the goal of that session. • Cool-down (5 min): Calming play, review, positive closure
 '          ],

            

            'perinatal-psychiatry' => [
                'title' => 'Perinatal Psychiatry',
                'image' => asset('assets/bg/perinatal.png'),
                'description' => 'Perinatal psychiatry focuses on the emotional and psychological well-being of women during pregnancy and the postpartum period. This phase involves significant hormonal, physical, and social changes, which can increase vulnerability to mental health conditions.
We provide comprehensive assessment and management for conditions such as antenatal and postnatal depression, anxiety disorders, mood instability, and postpartum adjustment difficulties. Our approach is sensitive, confidential, and tailored to each individual’s needs.
Treatment may include psychotherapy, supportive counseling, and when necessary, carefully selected medications that are safe during pregnancy and breastfeeding. We also work closely with families to provide education and support.
Our aim is to ensure the mental well-being of the mother while promoting healthy bonding and development for the child.
',
            ],

            'dementia-management' => [
                'title' => 'Dementia Management',
                'image' => asset('assets/bg/dementia.png'),
                'description' => 'Dementia management involves a comprehensive approach to care for individuals experiencing progressive cognitive decline affecting memory, thinking, and daily functioning. Early identification and intervention play a key role in improving outcomes.
Our services include detailed cognitive assessments, diagnosis, and individualized care planning. We provide cognitive stimulation strategies, behavioural interventions, and support for managing symptoms such as confusion, agitation, and mood changes.
Equally important, we offer guidance and counseling for caregivers, helping them understand the condition, manage stress, and provide effective care.
The goal of our dementia management program is to maintain independence for as long as possible, improve quality of life, and provide holistic support to both patients and their families
'
            ],

            'family-therapy' => [
                'title' => 'Family Therapy',
                'image' => asset('assets/bg/family.png'),
                'description' => 'Family therapy is a collaborative process that addresses interpersonal relationships and dynamics within the family system. Emotional distress in one member often affects the entire family, making a systemic approach essential.
Our therapists work with families to improve communication, resolve conflicts, and address behavioural or emotional concerns. Sessions provide a safe space for members to express their thoughts, understand differing perspectives, and develop healthier interaction patterns.
Family therapy is beneficial in situations involving parenting challenges, adolescent issues, marital conflicts, substance use concerns, and major life transitions.
The goal is to strengthen relationships, promote mutual understanding, and create a supportive and balanced family environment.
' ],

            'premarital-marital-counseling' => [
                'title' => 'Premarital / Marital Counseling',
                'image' => asset('assets/bg/marital.png'),
                'description' => 'Premarital and marital counseling services are designed to support couples in building and maintaining healthy relationships. Premarital counseling helps couples explore expectations, communication styles, values, and future goals before entering marriage.
Marital counseling focuses on addressing challenges such as communication gaps, conflicts, emotional distance, trust issues, and life stressors. Our therapists use structured, evidence-based approaches to guide couples toward understanding and resolution.
Sessions emphasize open communication, emotional connection, conflict resolution skills, and mutual respect.
Our aim is to help couples develop a strong foundation, rebuild trust where needed, and foster long-term relationship satisfaction.
' ],

            'fear-management' => [
                'title' => 'Fear Management',
                'image' => asset('assets/bg/fear.png'),
                'description' => 'Fear management focuses on helping individuals overcome excessive fears and phobias that interfere with everyday life. These fears may be related to specific objects, situations, or generalized anxiety patterns.
We conduct a thorough assessment to identify the nature and intensity of the fear, followed by structured therapeutic interventions such as gradual exposure, relaxation techniques, and cognitive restructuring.
Patients are guided step-by-step to face their fears in a safe and controlled manner, helping them reduce avoidance behaviours and regain confidence.
The goal is to empower individuals to manage fear effectively and lead a more independent and fulfilling life.
' ],

            'suicidal-management' => [
                'title' => 'Suicidal Management',
                'image' => asset('assets/bg/suicide.png'),
                'description' => 'Suicidal management involves immediate, sensitive, and comprehensive care for individuals experiencing suicidal thoughts, intentions, or behaviours. This is a critical area of mental health that requires timely intervention and ongoing support.
Our approach begins with a detailed risk assessment, followed by crisis intervention, safety planning, and emotional stabilization. We provide a supportive and non-judgmental environment where individuals can openly discuss their thoughts and feelings.
Treatment includes psychotherapy, coping skill development, and when required, medical management. Family involvement is encouraged to create a strong support system.
Our priority is to ensure safety, reduce distress, and support individuals toward recovery, hope, and long-term well-being.
'  ],

            'stress-management' => [
                'title' => 'Stress Management',
                'image' => asset('assets/bg/stress.png'),
                'description' => 'Stress management services aim to help individuals effectively cope with various forms of stress arising from personal, academic, or professional life. Chronic stress can significantly impact both mental and physical health if not addressed.
We provide individualized assessment to identify stressors and patterns, followed by tailored interventions including relaxation training, cognitive-behavioural strategies, time management techniques, and lifestyle modifications.
Clients are equipped with practical tools to manage pressure, improve emotional regulation, and enhance resilience.
Our goal is to help individuals achieve balance, improve productivity, and maintain overall psychological well-being.
' ],

            'child-adolescent-psychiatry' => [
                'title' => 'Child & Adolescent Psychiatry',
                'image' => asset('assets/bg/child.png'),
                'description' => 'Child care is a critical aspect of a child\'s development, impacting their physical, emotional and cognitive well-being. However, when child care is approached in a wrong or negligent manner, it can have detrimental effects on the child health and overall growth.
                Adolescent care is a critical component of promoting the health and well-being of teenagers as they navigate the transitional phase between childhood and adulthood. During adolescence, individuals undergo significant physical, emotional, and social changes that require specialized attention and support.
                ' ],

            'internet-gambling-deaddiction' => [
                'title' => 'Internet & Gambling De-addiction',
                'image' => asset('assets/bg/internet.png'),
                'description' => 'De-addiction for Internet & Gambling
To address the rising issue of behavioural addictions such as excessive internet use and gambling, structured programs are available. Therapy focuses on identifying triggers, reducing compulsive behaviours, enhancing self-control, and developing healthy habits. Family counselling and social skills training are incorporated to restore balance in life.
'],
            'alcohol-deaddiction' => [
                'title' => 'Alcohol De-addiction',
                'image' => asset('assets/bg/drug.png'),
                'description' => 'De-addiction for Alcohol
The organisation offers comprehensive de-addiction services for alcohol dependence, focusing on both physical and psychological recovery. Treatment includes medical management for withdrawal, counselling for behavioural change, relapse prevention, and lifestyle modifications. Patients also receive family counselling and continuous follow-up care to ensure long-term sobriety and reintegration into society.
'],

                'adult-psychiatry' => [
                'title' => 'Adult Psychiatry (De-addiction)',
                'image' => asset('assets/bg/adult.png'),
                'description' => 'De-addiction for Adult Psychiatry
Specialized psychiatric care for adults facing emotional and behavioural challenges, including substance abuse and dependency issues.
'],

        ];

        if (!array_key_exists($service, $services)) {
            abort(404);
        }

        return view('pages.hospital.service_detail', [
            'service' => $services[$service],
            'slug' => $service,
        ]);
    }
    
    public function freeServices()
    {
        $courses = Course::with('tags')
        ->where('course_type', 'free')
        ->get();
        return view('pages.hospital.free_services', compact('courses'));
    }
}

