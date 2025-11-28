<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    public function run()
    {
        // Template 1: Undangan Pernikahan
        Template::create([
            'nama_template' => 'Template Pernikahan Elegant',
            'deskripsi' => 'Template undangan pernikahan dengan desain elegant dan modern',
            'html_content' => '
                <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; border-radius: 10px;">
                    <div style="background: white; color: #333; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <h1 style="font-size: 36px; margin-bottom: 10px; color: #667eea;">Undangan Pernikahan</h1>
                        <div style="width: 60px; height: 3px; background: #667eea; margin: 20px auto;"></div>
                        
                        <p style="font-size: 18px; margin: 20px 0;">Kepada Yth.</p>
                        <p style="font-size: 20px; font-weight: bold; color: #667eea; margin: 10px 0;">{{tujuan_undangan}}</p>
                        
                        <div style="margin: 40px 0; padding: 30px; background: #f8f9fa; border-radius: 8px;">
                            <p style="font-size: 16px; margin-bottom: 20px;">Dengan segala kerendahan hati, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami:</p>
                            
                            <h2 style="font-size: 32px; color: #667eea; margin: 20px 0;">{{nama_pengirim}}</h2>
                            
                            <div style="margin: 30px 0;">
                                <p style="font-size: 18px; font-weight: bold; margin: 10px 0;">{{nama_acara}}</p>
                                <p style="font-size: 16px; margin: 5px 0;">📅 {{tanggal_acara}}</p>
                                <p style="font-size: 16px; margin: 5px 0;">📍 {{tempat_acara}}</p>
                            </div>
                            
                            <p style="font-style: italic; color: #666; margin-top: 20px;">{{pesan_tambahan}}</p>
                        </div>
                        
                        <p style="font-size: 16px; margin-top: 30px;">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu.</p>
                        
                        <div style="margin-top: 40px; padding-top: 20px; border-top: 2px solid #e0e0e0;">
                            <p style="font-size: 14px; color: #999;">Hormat kami,</p>
                            <p style="font-size: 16px; font-weight: bold; color: #667eea;">{{nama_pengirim}}</p>
                        </div>
                    </div>
                </div>
            ',
            'is_active' => true,
        ]);

        // Template 2: Undangan Seminar
        Template::create([
            'nama_template' => 'Template Seminar Professional',
            'deskripsi' => 'Template undangan seminar dengan tampilan professional',
            'html_content' => '
                <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 40px; background: #f5f5f5;">
                    <div style="background: white; padding: 0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <div style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 40px; text-align: center; color: white;">
                            <h1 style="font-size: 32px; margin: 0;">UNDANGAN SEMINAR</h1>
                        </div>
                        
                        <div style="padding: 40px;">
                            <p style="font-size: 16px; margin-bottom: 20px;">Kepada Yth.</p>
                            <p style="font-size: 20px; font-weight: bold; color: #1e3c72; margin-bottom: 30px;">{{tujuan_undangan}}</p>
                            
                            <p style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">Dengan hormat, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri:</p>
                            
                            <div style="background: #f8f9fa; padding: 30px; border-left: 4px solid #1e3c72; margin: 30px 0;">
                                <h2 style="font-size: 24px; color: #1e3c72; margin: 0 0 20px 0;">{{nama_acara}}</h2>
                                
                                <table style="width: 100%; margin-top: 20px;">
                                    <tr>
                                        <td style="padding: 10px 0; font-weight: bold; width: 30%;">Penyelenggara:</td>
                                        <td style="padding: 10px 0;">{{nama_pengirim}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0; font-weight: bold;">Tanggal & Waktu:</td>
                                        <td style="padding: 10px 0;">{{tanggal_acara}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0; font-weight: bold;">Tempat:</td>
                                        <td style="padding: 10px 0;">{{tempat_acara}}</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div style="background: #fff3cd; border: 1px solid #ffc107; padding: 20px; border-radius: 5px; margin: 30px 0;">
                                <p style="margin: 0; font-size: 14px; color: #856404;">{{pesan_tambahan}}</p>
                            </div>
                            
                            <p style="font-size: 16px; line-height: 1.6; margin-top: 30px;">Atas perhatian dan kehadiran Bapak/Ibu/Saudara/i, kami ucapkan terima kasih.</p>
                            
                            <div style="margin-top: 40px; text-align: right;">
                                <p style="font-size: 14px; color: #999; margin: 5px 0;">Hormat kami,</p>
                                <p style="font-size: 18px; font-weight: bold; color: #1e3c72; margin: 5px 0;">{{nama_pengirim}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            ',
            'is_active' => true,
        ]);

        // Template 3: Undangan Ulang Tahun
        Template::create([
            'nama_template' => 'Template Ulang Tahun Fun',
            'deskripsi' => 'Template undangan ulang tahun dengan desain ceria dan menyenangkan',
            'html_content' => '
                <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 40px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); text-align: center;">
                        <h1 style="font-size: 48px; margin: 0; color: #f5576c;">🎉</h1>
                        <h1 style="font-size: 36px; margin: 20px 0; color: #f5576c;">Undangan Ulang Tahun</h1>
                        
                        <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; padding: 30px; border-radius: 10px; margin: 30px 0;">
                            <p style="font-size: 18px; margin: 10px 0;">Hai {{tujuan_undangan}}! 👋</p>
                            <p style="font-size: 16px; margin: 20px 0;">Kamu diundang ke:</p>
                            <h2 style="font-size: 32px; margin: 20px 0; text-transform: uppercase;">{{nama_acara}}</h2>
                        </div>
                        
                        <div style="text-align: left; padding: 20px; background: #fff5f8; border-radius: 8px; margin: 30px 0;">
                            <p style="font-size: 16px; margin: 15px 0;"><strong>🎂 Diselenggarakan oleh:</strong> {{nama_pengirim}}</p>
                            <p style="font-size: 16px; margin: 15px 0;"><strong>📅 Tanggal & Waktu:</strong> {{tanggal_acara}}</p>
                            <p style="font-size: 16px; margin: 15px 0;"><strong>📍 Tempat:</strong> {{tempat_acara}}</p>
                        </div>
                        
                        <div style="background: #ffeb3b; padding: 20px; border-radius: 8px; margin: 30px 0;">
                            <p style="margin: 0; font-size: 16px; color: #333; font-style: italic;">{{pesan_tambahan}}</p>
                        </div>
                        
                        <p style="font-size: 18px; margin-top: 30px; color: #666;">Ditunggu kehadirannya ya! 🎈🎊</p>
                        
                        <div style="margin-top: 30px; padding-top: 20px; border-top: 2px dashed #f5576c;">
                            <p style="font-size: 14px; color: #999;">Dari,</p>
                            <p style="font-size: 20px; font-weight: bold; color: #f5576c;">{{nama_pengirim}}</p>
                        </div>
                    </div>
                </div>
            ',
            'is_active' => true,
        ]);
    }
}